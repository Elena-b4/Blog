<?php

namespace App\Http\Controllers\Blog\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('contact');
    }
}
