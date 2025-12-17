<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['winner'])) {
    $winner = $data['winner'];
    $timestamp = date('Y-m-d H:i:s');
    $logEntry = "$timestamp - Gagnant: $winner\n";
    
    file_put_contents('results.log', $logEntry, FILE_APPEND);
    
    echo json_encode(['success' => true, 'message' => 'Résultat sauvegardé']);
} else {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Données invalides']);
}
?>
