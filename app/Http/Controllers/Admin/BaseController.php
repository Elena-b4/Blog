<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AdminService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new AdminService();
    }
}
