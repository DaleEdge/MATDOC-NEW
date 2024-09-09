<?php
namespace App\Http\Controllers;

class ConsoleController extends Controller
{
    public function index()
    {
        return view('frontend.pages.console');
    }
}