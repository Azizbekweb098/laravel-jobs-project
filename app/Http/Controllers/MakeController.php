<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class MakeController extends Controller
{


    public function dashboard() {

        $applications = Application::latest()->paginate(4);

        return view('dashboard', compact('applications'));
    }
}
