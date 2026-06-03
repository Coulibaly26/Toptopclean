<?php
/**
 * Copiez ce fichier en config/ai.php et renseignez votre clé API OpenAI.
 * Sans clé, l'agent utilise un mode assistant local (réponses guidées).
 */
return [
    'provider' => 'openai',
    'openai_api_key' => '',
    'openai_model' => 'gpt-4o-mini',
    'max_history' => 12,
    'max_message_length' => 800,
    'company' => [
        'name' => 'TopTop Clean KD',
        'phone' => '06 12 34 56 78',
        'email' => 'contact@toptopclean.fr',
        'website' => 'www.toptopclean.fr',
        'zone' => 'Paris et Île-de-France',
    ],
];
