<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Jose Mendoza',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Rosa Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Mark Torres',
                'role' => 'Staff'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Liza Garcia',
                'role' => 'Manager'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Carlo Reyes',
                'role' => 'Cashier'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}