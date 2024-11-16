<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function showCustomer()
    {
        $customers = DB::table('customers')->get();

        return view ('allcustomers', ['data'=>$customers]);
    }

    public function singleCustomer(string $id) {
        $customer = DB::table('customers')->where('id', $id)->get();

        
        foreach($customer as $cust)
        {
            echo "Name : " . $cust->name . "<br>" . 
            "Mobile : ". $cust->mobile . "<br>" . 
            "Email : ". $cust->email . "<br>" . 
            "Address : " . $cust->address . "<br>" .
            "Created At : " . $cust->created_at . "<br>" .
            "Updated At : " . $cust->updated_at;
        }

    }
}
