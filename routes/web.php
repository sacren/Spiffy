<?php

use App\Livewire\Dummy;
use App\Livewire\SpiffyComponent;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', SpiffyComponent::class);

Route::get('/counter', function () {
    return view('counter');
});

Route::get('/dummy', Dummy::class);

Route::get('/todos', Todos::class);
