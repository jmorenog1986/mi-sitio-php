<?php
namespace App\Models;

class User {
    protected $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function all() {
        $stmt = $this->pdo->query('SELECT id, name, email, created_at FROM users ORDER BY id DESC');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
