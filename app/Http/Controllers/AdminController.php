<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class AdminController extends Controller
{
    //
    public function adminDashboard(){
        return view('admin.home');
    }

    public function adminFormation(){
        return view('admin.formation');
    }

}
