<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin_nap', 'role' => 'Administrator'],
            ['id' => 2, 'username' => 'cashier_one', 'role' => 'Cashier'],
            ['id' => 3, 'username' => 'cashier_two', 'role' => 'Cashier'],
            ['id' => 4, 'username' => 'manager_sarah', 'role' => 'Manager'],
            ['id' => 5, 'username' => 'stock_mike', 'role' => 'Inventory'],
        ];

        return view('users', compact('users'));
    }
}