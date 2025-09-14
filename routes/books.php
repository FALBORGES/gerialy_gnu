<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return [[
        'id' => 1,
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'published_year' => 1925,
    ], [
        'id' => 2,
        'title' => '1984',
        'author' => 'George Orwell',
        'published_year' => 1949,
    ], [
        'id' => 3,
        'title' => 'To Kill a Mockingbird',
        'author' => 'Harper Lee',
        'published_year' => 1960,
    ]];
});
