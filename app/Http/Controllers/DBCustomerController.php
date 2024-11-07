<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBCustomerController extends Controller
{
    public function showCustomer()
    {
        $customers = DB::table('customers')->get();

        return view ('allcustomers', ['data'=>$customers]);
    }
}
