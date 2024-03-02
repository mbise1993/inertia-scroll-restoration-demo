<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return inertia('Home');
});

Route::get('/users', function () {
    return inertia('Users', [
        'users' => [
            [
                'id' => 1,
                'name' => 'Jonathan Reinink',
                'email' => 'jonathan@example.com',
            ],
            [
                'id' => 2,
                'name' => 'Adam Wathan',
                'email' => 'adam@example.com',
            ],
            [
                'id' => 3,
                'name' => 'Taylor Otwell',
                'email' => 'taylor@example.com',
            ],
            [
                'id' => 4,
                'name' => 'Jordan Pittman',
                'email' => 'jordan@example.com',
            ],
            [
                'id' => 5,
                'name' => 'Jess Archer',
                'email' => 'jess@example.com',
            ],
            [
                'id' => 6,
                'name' => 'Claudio Dekker',
                'email' => 'claudio@example.com',
            ],
            [
                'id' => 7,
                'name' => 'Sebastian De Deyne',
                'email' => 'sebastian@example.com',
            ],
            [
                'id' => 8,
                'name' => 'Pedro Borges',
                'email' => 'pedro@example.com',
            ],
            [
                'id' => 9,
                'name' => 'Reinink, Jonathan',
                'email' => 'reinik@example.com',
            ],
            [
                'id' => 10,
                'name' => 'Wathan, Adam',
                'email' => 'wathan@example.com',
            ],
            [
                'id' => 11,
                'name' => 'Otwell, Taylor',
                'email' => 'otwell@example.com',
            ],
            [
                'id' => 12,
                'name' => 'Pittman, Jordan',
                'email' => 'pittman@example.com',
            ],
            [
                'id' => 13,
                'name' => 'Archer, Jess',
                'email' => 'archer@example.com',
            ],
            [
                'id' => 14,
                'name' => 'Dekker, Claudio',
                'email' => 'dekker@example.com',
            ],
            [
                'id' => 15,
                'name' => 'De Deyne, Sebastian',
                'email' => 'dedeyne@example.com',
            ],
            [
                'id' => 16,
                'name' => 'Borges, Pedro',
                'email' => 'borges@example.com',
            ],
        ],
    ]);
});

Route::get('/article', function () {
    return inertia('Article');
});

Route::get('/form', function () {
    return inertia('Form');
});

Route::get('/user/{id}', function () {
    return inertia('User', [
        'user' => [
            'name' => 'Example User',
            'company' => 'Acme Corp.',
            'role' => 'Lead Developer',
        ]
    ]);
});

Route::post('/user', function () {
    return inertia('User', [
        'user' => request()->validate([
            'name' => ['required'],
            'company' => ['required'],
            'role' => ['required', 'in:User,Admin,Super'],
        ])
    ]);
});

Route::get('/login', function () {
    return inertia('Login');
});

Route::post('/logout', function () {
    return redirect('/login');
});
