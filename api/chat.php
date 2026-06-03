<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Méthode non autorisée']);
    exit;
}

session_start();

$configPath = dirname(__DIR__) . '/config/ai.php';
$examplePath = dirname(__DIR__) . '/config/ai.example.php';
$config = file_exists($configPath)
    ? require $configPath
    : (file_exists($examplePath) ? require $examplePath : []);

require_once dirname(__DIR__) . '/lib/ChatAgentService.php';

$raw = file_get_contents('php://input');
$data = json_decode($raw ?: '{}', true);

if (!is_array($data)) {
    http_response_code(400);
    echo json_encode(['error' => 'Requête invalide']);
    exit;
}

$message = trim((string) ($data['message'] ?? ''));
$history = $data['history'] ?? [];

if (!is_array($history)) {
    $history = [];
}

$maxLen = (int) ($config['max_message_length'] ?? 800);
if ($message === '' || mb_strlen($message) > $maxLen) {
    http_response_code(400);
    echo json_encode(['error' => 'Message vide ou trop long']);
    exit;
}

// Limite simple anti-spam (session)
$now = time();
$last = (int) ($_SESSION['chat_last_request'] ?? 0);
if ($now - $last < 1) {
    http_response_code(429);
    echo json_encode(['error' => 'Veuillez patienter une seconde avant d\'envoyer un autre message.']);
    exit;
}
$_SESSION['chat_last_request'] = $now;

try {
    $agent = new ChatAgentService($config);
    $reply = $agent->reply($message, $history);

    echo json_encode([
        'reply' => $reply,
        'agent' => 'Diarra',
        'mode' => !empty(trim($config['openai_api_key'] ?? '')) ? 'ai' : 'assistant',
    ]);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Une erreur est survenue. Réessayez ou contactez-nous par téléphone.']);
}
