<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        require ('../resources/views/pages/about.blade.php');
    }
}
