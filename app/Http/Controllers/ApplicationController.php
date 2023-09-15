<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    

    public function create(){
        return view('Admin.Application.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'modeltype' => 'required',
            'pemasaran' => 'required',
            'pembuat' => 'required',
            'alamat' => 'required',
            'localrepName' => 'required',
            'localrepAlamat' => 'required',
        ]);
   
        $input = $request->all();
     
        Application::create($input);
      
        return redirect()->route('ApplicationTable')
            ->with('success','Application added successfully.');
    }

    public function edit(Application $artikel, $id)
    {
        $application = Application::find($id);
        return view('Admin.Application.edit',compact('application'));
    }

    public function update(Request $request, $id)
    {
        $application = Application::find($id);

        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'modeltype' => 'required',
            'pemasaran' => 'required',
            'pembuat' => 'required',
            'alamat' => 'required',
            'localrepName' => 'required',
            'localrepAlamat' => 'required',
        ]);

        $input = request()->except(['_method', '_token']);

        $application->update($input);
     
        return redirect()->route('ApplicationTable')
            ->with('success','Application Details Updated Successfully.');
    }

    public function destroy($id) {
        $application = Application::find($id);
        $application->delete();
        return redirect('/admin/application')
            ->with('success','Application Deleted successfully');
    }
}
