<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
{
    // Show the loader
    echo '<script>showLoader();</script>';

    // Simulate an asynchronous operation
    sleep(3);

    // Hide the loader
    echo '<script>hideLoader();</script>';

    return view('welcome');
}

}
