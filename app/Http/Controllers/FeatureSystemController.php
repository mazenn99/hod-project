<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureSystemController extends Controller
{
    // feature system view
    public function featureView() {
        return view('feature');
    }
}
