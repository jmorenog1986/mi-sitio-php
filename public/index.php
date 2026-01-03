<?php
// Punto de entrada público

// Autoload PSR-4 básico (para este scaffold simple)
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/../src/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

require __DIR__ . '/../includes/db.php';
require __DIR__ . '/../includes/functions.php';

// Router muy simple: muestra la home
$controller = new \App\Controllers\HomeController();
$controller->index();
