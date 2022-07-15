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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
  return view('home', [
    "name" => "Muhamad Akbar Sinyo",
    "title" => "I'm a passionate graphic designer from Blitar",
    "title1" => "Saya mampu bersaing di duinia Industri Website Developer Dan Cyber Security",
    "birthday" => "23 May 2001",
    "phone" => "089697751622",
    "city" => "Blitar, Jawa Timur",
    "age" => "21",
    "email" => "akbarsinyotahe@gmail.com",
    "freelance" => "available",
    "address" => "Kec.Garum, Kab.Blitar, Jawa Timur"]);
});
