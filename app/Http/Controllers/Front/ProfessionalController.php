<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    public function index()
    {
      return view('Front.Pages.professional');
    }
}
