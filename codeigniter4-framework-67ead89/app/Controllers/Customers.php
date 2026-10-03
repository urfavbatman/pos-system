<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
    [
        'full_name' => 'Juan Dela Cruz',
        'email' => 'juan@example.com',
        'phone' => '09123456789'
    ],
    [
        'full_name' => 'Maria Santos',
        'email' => 'maria@example.com',
        'phone' => '09234567890'
    ],
    [
        'full_name' => 'Gabrielle Reyes',
        'email' => 'gabrielle@example.com',
        'phone' => '09345678901'
    ],
    [
        'full_name' => 'Manuel Cruz',
        'email' => 'manuel@example.com',
        'phone' => '09456789012'
    ],
    [
        'full_name' => 'Buddy Santos',
        'email' => 'buddy@example.com',
        'phone' => '09567890123'
    ]
        ];

        return view('customers', [
            'customers' => $customers
        ]);
    }
}?>