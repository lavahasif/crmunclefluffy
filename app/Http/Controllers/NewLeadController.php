<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\NLead;
use Illuminate\Http\Request;

class NewLeadController extends Controller
{
    public function Index()
    {
        return View('Admin.NewLead');
    }
    public function add(Request $request)
    {
        $islogin =   $this->validate($request, [
            'txt_name' => 'required',
            'txt_email' => 'required',
            'txt_phone' => 'required',
            'txt_country' => 'required',
            'txt_interest' => 'required',
            'txt_remark' => 'required',
            'opt_source' => 'required',
            'opt_status' => 'required',
        ]);

        if ($islogin) {
            // $person = new Customer();
            // $person->name = $islogin["txt_name"];
            // $person->phone = $islogin["txt_phone"];
            // $person->country = $islogin["txt_country"];
            // $person->Email = $islogin["txt_email"];
            $customers = [

                'name' =>  $islogin["txt_name"],
                'phone' => $islogin["txt_phone"],
                'Email' =>   $islogin["txt_email"],
                'country' =>  $islogin["txt_country"],
            ];


            $status =   NLead::saveme($islogin, $customers);

            return redirect()->route('newlead')->withSuccess('The model has been created.');
        }
    }
}
