<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\t_application;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('dashboard');
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    public function hospital_registration()
    {
        return view('hospital_registration');
    }
    public function apply_visit(Request $request)
    {
        $app = new t_application;

            $app->name=$request->name;

            $app->phone=$request->phone;

            $app->email=$request->email;

            $app->std_no=$request->std_no;

            $app->department=$request->department;

            $app->message=$request->message;


            $app->save();

        // Optionally, you can add a success message and redirect the user
        return redirect()->back()->with('success', 'Order placed successfully!');
    }
}
