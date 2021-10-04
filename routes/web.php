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

// Route::get('/', function () {
    //     return view('welcome');
    // });


    // Route::get('/', function () {
        //     return view('index');
        // });


        Route::get('/', function () {
            return view('home',[
                "title" => "home"
            ]);
        });


        Route::get('/blog', function () {
            $blog_post = [
                [
                    "po" => "ki",
                    "me" => "mek",
                    "bel" => "KI"
                ],
                [
                    "po" => "ki",
                    "me" => "bi",
                    "bel" => "KI"
                ],
            ];


            return view('blog',[
                "title" => "blog",
                "post" => $blog_post
            ]);

        });


        Route::get('/admin', function () {
            return view('admin',[
                "title" => "admin"
            ]);
        });


        Route::get('/about', function () {
            return view('about',[
                "title" => "about",
                "nama" => "nae jaesan",
                "email" => "naejaesan@gmail.com",
                "image" => "nae.jpg"
            ]);
        });

        //halaman single post
        Route::get('post/{bel}', function ($bel){
            return view('post',
            [
                'title' => 'single post'

            ]);

        });
