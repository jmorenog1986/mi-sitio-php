<?php
// Archivo de configuración (usar variables de entorno en producción)
return [
    'db' => [
        'host' => getenv('DB_HOST') ?: '127.0.0.1',
        'port' => getenv('DB_PORT') ?: '3306',
        'name' => getenv('DB_NAME') ?: 'mi_sitio',
        'user' => getenv('DB_USER') ?: 'root',
        'pass' => getenv('DB_PASS') ?: '123456',
        'charset' => 'utf8mb4',
    ],
];
