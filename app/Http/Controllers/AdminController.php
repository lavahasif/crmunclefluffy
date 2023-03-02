<?php

namespace App\Http\Controllers;

use App\Models\NLead;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index()
    {
        $model = NLead::with('customer', 'Source', 'Status')->paginate(4);
        return View('Admin.Dashboard')->with('models',$model);
    }
    //
}
