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
            'localrepName' => 'required',
            'name' => 'required',
            'brand' => 'required',
        ]);
   
        $input = $request->all();
   
        // if ($image = $request->file('image')) {
        //     $destinationPath = 'images/';
        //     $artikelimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $artikelimage);
        //     $input['image'] = "$artikelimage";
        // }
     
        Application::create($input);
      
        return redirect()->route('applicationTable')
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
            'title' => 'required',
            'description' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = request()->except(['_method', '_token']);

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $artikelimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $artikelimage);
            $input['image'] = "$artikelimage";
        }else{
            unset($input['image']);
        }

        $application->update($input);
     
        return redirect()->route('artikelTable')
            ->with('success','Artikel Details Updated successfully');
    }

    public function destroy($id) {
        $application = Application::find($id);
        $application->delete();
        return redirect('/admin/application')
            ->with('success','Artikel Deleted successfully');
    }
}
