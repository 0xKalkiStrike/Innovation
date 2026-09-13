<?php
declare(strict_types=1);

function db(): mysqli {
    $host = getenv('DB_HOST') ?: '127.0.0.1';
    $user = getenv('DB_USER') ?: 'root';
    $pass = getenv('DB_PASSWORD') ?: '';
    $name = getenv('DB_NAME') ?: 'innovation_ecosystem_2026';
    $port = (int)(getenv('DB_PORT') ?: 3306);

    $conn = new mysqli($host, $user, $pass, $name, $port);
    if ($conn->connect_error) {
        throw new RuntimeException('Database connection failed.');
    }
    $conn->set_charset('utf8mb4');
    return $conn;
}

function post_string(string $key): string {
    return isset($_POST[$key]) && !is_array($_POST[$key])
        ? trim((string)$_POST[$key])
        : '';
}

function post_array(string $key): string {
    if (!isset($_POST[$key])) return '';
    $value = $_POST[$key];
    if (!is_array($value)) return trim((string)$value);
    $value = array_map(fn($v) => trim((string)$v), $value);
    $value = array_values(array_filter($value, fn($v) => $v !== ''));
    return implode(', ', $value);
}
