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
    return view('homepage');
})->name('homepage');

Route::get('/technologies', function () {
    return view('technologies');
})->name('technologies');

Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');

Route::get('/major-projects', function() {
    return view('major_projects.index');
})->name('major_projects');
Route::get('/major-projects/food-skills-library', function() {
    return view('major_projects.food_skills_library');
})->name('major_projects.food_skills_library');
Route::get('/major-projects/grace-church', function() {
    return view('major_projects.grace_church');
})->name('major_projects.grace_church');
Route::get('/major-projects/idle-wizard-wiki', function() {
    return view('major_projects.idle_wizard_wiki');
})->name('major_projects.idle_wizard_wiki');
Route::get('/major-projects/this-site', function() {
    return view('major_projects.this_site');
})->name('major_projects.this_site');
Route::get('/major-projects/znanja', function() {
    return view('major_projects.znanja');
})->name('major_projects.znanja');

Route::get('/cover/id', function () {
    return view('cover.id');
})->name('cover.id');
Route::get('/cover/360insights', function () {
    return view('cover.360insights');
})->name('cover.360insights');