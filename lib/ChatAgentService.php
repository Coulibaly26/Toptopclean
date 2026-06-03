<?php

class ChatAgentService
{
    private array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function reply(string $message, array $history = []): string
    {
        $message = trim($message);
        if ($message === '') {
            return 'Pouvez-vous préciser votre demande ? Je suis là pour vous aider.';
        }

        $apiKey = trim($this->config['openai_api_key'] ?? '');
        if ($apiKey !== '' && ($this->config['provider'] ?? 'openai') === 'openai') {
            $aiReply = $this->callOpenAI($message, $history, $apiKey);
            if ($aiReply !== null) {
                return $aiReply;
            }
        }

        return $this->fallbackReply($message);
    }

    private function systemPrompt(): string
    {
        $c = $this->config['company'] ?? [];
        $name = $c['name'] ?? 'TopTop Clean KD';
        $phone = $c['phone'] ?? '06 12 34 56 78';
        $email = $c['email'] ?? 'contact@toptopclean.fr';
        $zone = $c['zone'] ?? 'Paris et Île-de-France';

        return <<<PROMPT
Tu es Diarra, conseillère virtuelle professionnelle de {$name}, entreprise de nettoyage résidentiel et professionnel.
Tu réponds en français, avec un ton chaleureux, rassurant et très professionnel.

Règles :
- Aide les visiteurs : services, devis gratuit, délais, zone d'intervention, nettoyage écologique, bureaux, commerces, fin de chantier.
- Ne invente jamais de prix fixe : oriente vers un devis personnalisé gratuit.
- Pour une demande concrète ou un rendez-vous : propose le formulaire de contact ou le téléphone {$phone}.
- Reste concise (2 à 5 phrases sauf si le client demande plus de détails).
- Si tu ne sais pas : invite à contacter {$email} ou {$phone}.
- Zone : {$zone}.
PROMPT;
    }

    private function callOpenAI(string $message, array $history, string $apiKey): ?string
    {
        $messages = [['role' => 'system', 'content' => $this->systemPrompt()]];

        $maxHistory = (int) ($this->config['max_history'] ?? 12);
        $slice = array_slice($history, -$maxHistory);
        foreach ($slice as $item) {
            if (!is_array($item)) {
                continue;
            }
            $role = $item['role'] ?? '';
            $content = trim((string) ($item['content'] ?? ''));
            if ($content === '' || !in_array($role, ['user', 'assistant'], true)) {
                continue;
            }
            $messages[] = ['role' => $role, 'content' => $content];
        }

        $messages[] = ['role' => 'user', 'content' => $message];

        $payload = json_encode([
            'model' => $this->config['openai_model'] ?? 'gpt-4o-mini',
            'messages' => $messages,
            'temperature' => 0.6,
            'max_tokens' => 450,
        ]);

        $ch = curl_init('https://api.openai.com/v1/chat/completions');
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $apiKey,
            ],
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_TIMEOUT => 30,
        ]);

        $response = curl_exec($ch);
        $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($response === false || $httpCode < 200 || $httpCode >= 300) {
            return null;
        }

        $data = json_decode($response, true);
        $text = $data['choices'][0]['message']['content'] ?? null;

        return is_string($text) ? trim($text) : null;
    }

    private function fallbackReply(string $message): string
    {
        $m = mb_strtolower($message);
        $phone = $this->config['company']['phone'] ?? '06 12 34 56 78';

        if (preg_match('/\b(devis|tarif|prix|coût|cout|combien)\b/u', $m)) {
            return "Chaque projet est unique : nous établissons un devis gratuit et sans engagement après étude de vos besoins (surface, type de locaux, fréquence). Remplissez le formulaire « Contact » sur le site ou appelez le {$phone} — réponse sous 24 h.";
        }

        if (preg_match('/\b(éco|eco|écologique|environnement|produit)\b/u', $m)) {
            return "Oui, TopTop Clean KD propose un nettoyage écologique sur simple demande, avec des produits certifiés respectueux de l'environnement, sans surcoût. Souhaitez-vous l'indiquer dans votre demande de devis ?";
        }

        if (preg_match('/\b(bureau|tertiaire|entreprise|locaux pro)\b/u', $m)) {
            return "Nous assurons l'entretien de bureaux et locaux professionnels : hygiène quotidienne, désinfection et remise en état. Un devis personnalisé vous sera proposé après échange sur vos surfaces et planning.";
        }

        if (preg_match('/\b(résidentiel|maison|appartement|domicile|ménage)\b/u', $m)) {
            return "Nous intervenons aussi en résidentiel (ménage régulier ou ponctuel). Décrivez votre besoin via le formulaire de contact ou par téléphone au {$phone} pour recevoir une proposition adaptée.";
        }

        if (preg_match('/\b(chantier|travaux|fin de chantier|rénovation)\b/u', $m)) {
            return "Notre équipe réalise des remises en état après travaux : sols, vitres, poussières et finitions. Contactez-nous avec la surface et la date souhaitée pour un devis précis.";
        }

        if (preg_match('/\b(contact|appel|téléphone|tel|joindre|rdv|rendez-vous)\b/u', $m)) {
            return "Vous pouvez nous joindre au {$phone}, par e-mail à contact@toptopclean.fr, ou via le formulaire « Contact » en bas de la page d'accueil. Nous revenons vers vous rapidement.";
        }

        if (preg_match('/\b(bonjour|salut|hello|bonsoir)\b/u', $m)) {
            return "Bonjour ! Je suis Diarra, votre assistante TopTop Clean KD. Je peux vous renseigner sur nos prestations, un devis gratuit ou prendre en charge votre demande. Que souhaitez-vous savoir ?";
        }

        if (preg_match('/\b(merci|au revoir|à bientôt)\b/u', $m)) {
            return "Avec plaisir ! N'hésitez pas si vous avez d'autres questions. Excellente journée de la part de TopTop Clean KD.";
        }

        return "Merci pour votre message. Pour un devis ou une intervention sur mesure, utilisez le formulaire Contact ou appelez le {$phone}. Précisez le type de locaux (bureau, commerce, résidentiel) et la surface si possible — je peux aussi répondre à vos questions sur nos services.";
    }
}
