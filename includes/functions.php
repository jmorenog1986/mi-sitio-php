<?php
// Funciones auxiliares

function base_url($path = '') {
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/') . '/';
    return $base . ltrim($path, '/');
}

function render($view, $params = []) {
    extract($params);
    $viewFile = __DIR__ . '/../src/views/' . $view . '.php';
    if (!file_exists($viewFile)) {
        echo "Vista no encontrada: $viewFile";
        return;
    }
    include $viewFile;
}

function e($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
