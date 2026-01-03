<?php
namespace App\Controllers;

use App\Models\User;

class HomeController {
    public function index() {
        $userModel = new User();
        $users = $userModel->all();
        render('home', ['users' => $users]);
    }
}
