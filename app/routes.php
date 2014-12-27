<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home.index');
});

Route::get('about', function()
{
	return View::make('about.index');
});

Route::get('order', function()
{
    return View::make('order.index');
});

Route::get('promotions', function()
{
    return View::make('promotions.index');
});

Route::get('products', function()
{
    return View::make('products.index');
});