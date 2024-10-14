<?php

// use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', WelcomeController::class);
Route::view('/', 'projects.index')->name('projects.index');
Route::get('/projects/{project}', function ($project) {
    // Aqui você pode carregar os dados do projeto a partir do banco de dados
    // Por exemplo, usando o modelo Project
    $projectData = \App\Models\Project::findOrFail($project);
    
    return view('projects.show', compact('projectData'));
})->name('projects.show');