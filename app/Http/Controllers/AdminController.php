<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ApiController;

class AdminController extends Controller
{
    public function initialize()
    {
         Http::get(url('api/branches'));
         Http::get(url('api/branch'));
        return Http::get(url('api/properties'));
    }
}
