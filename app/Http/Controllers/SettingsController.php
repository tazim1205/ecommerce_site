<?php

namespace App\Http\Controllers;
use App\Models\site_settings;
use RealRashid\SweetAlert\Facades\Alert;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = site_settings::find(1);

        return view('site_settings',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert= site_settings::find(1)->update($request->except('_token','image'));

        $file= $request->file('image');

        // $id=$insert->id;

        if($file)
        {
            $pathImage = site_settings::find(1);

            $path = public_path().'/assets/images/site_settings/'.$pathImage->image;

            if(file_exists($path))
            {
                unlink($path);
            }

        }

        if($file)
        {
            $imageName=rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/assets/images/site_settings/',$imageName);

            site_settings::where('id',1)->update(['image'=>$imageName]);
        }

        if($insert)
        {
            Toastr::success('Data Update Success', 'success');
            return redirect()->back();
        }
        else
        {
            Alert::error('Congrats', 'Data Update Error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
