<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        echo "<h1>This is Single Action Controller!.......</h1>";
    }
}
