<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    public function showServices()
    {
        $services = DB::table('services')->get();

        return view('services', ['services'=>$services]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = service::all();
        // return $services;
        return view('admin.services', ['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createservice');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $services = new service;
        $services->id = $request->id;
        $services->title = $request->title;
        $services->description = $request->description;
        
        $services->document_list = $request->document_list;
        $services->note = $request->note;

        if($request->hasFile('image_url')){
           $path =  Storage::disk("public")->put("images", $request->image_url);
           $services->image_url = "/storage/" . $path;
        }
        $services->save();
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
        $service = service::findOrFail($id);
        if ($service->image_url) {
            Storage::disk('public')->delete($service->image_url);
        }
        service::destroy($id);
        
    }
}
