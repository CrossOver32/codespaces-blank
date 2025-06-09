<?php
header('Content-Type: application/json');

echo json_encode([
    'modulo' => 'acadêmico',
    'status' => 'API base pronta',
    'submodules' => ['alunos', 'turmas', 'disciplinas', 'matrículas', 'notas']
]);
