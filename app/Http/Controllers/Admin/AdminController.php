<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Application;
use App\DataTables\ArtikelDataTable;

class AdminController extends Controller
{
    public function dashboard(){
        return view('Admin.index');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo"<pre>"; print_r($data); die;

            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
                return redirect("admin/dashboard");
            }else{
                return redirect()->back()->with("error","Whoops! Invalid Email or Password");
            }
        }
        return view('Admin.Auth.login');
    }



    // ROUTES
    public function application()
    {
        $application = Application::paginate(5);

        return view('Admin.Application.application', compact('application'));
}
}
