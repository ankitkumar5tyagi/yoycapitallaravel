<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ServiceController extends Controller
{
    public function showServices()
    {
        $services = DB::table('services')->get();

        return view('services', ['services'=>$services]);
    }

}
