<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewLeadController extends Controller
{
    public function Index()
    {
        return View('Admin.NewLead');
    }
}
