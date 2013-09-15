<?php

require __DIR__ . '/src/password.php';

if (preg_match('#/generate/?#', $_SERVER['REQUEST_URI']) === 1) {
    ob_start();
    require __DIR__ . '/templates/result.phtml';
    $content = ob_get_contents();
    ob_end_clean();
} else {
    ob_start();
    require __DIR__ . '/templates/home.phtml';
    $content = ob_get_contents();
    ob_end_clean();
}

require __DIR__ . '/templates/main.phtml';
