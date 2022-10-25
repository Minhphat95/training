<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginEmployeeDashboardController extends Controller
{
    public function index()
    {
        return view('employee_dashboard.login', [
            'title'=>'Login Employee Dashboard'
        ]);
    }
}
