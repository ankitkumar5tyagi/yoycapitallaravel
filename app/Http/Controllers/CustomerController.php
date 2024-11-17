<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function showCustomer()
    {
        $customers = DB::table('customers')->paginate(25); 

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
    public function addCustomer (Request $req){
        
        //Mobile Validation
       if (!preg_match('/^[0-9]{10}$/', $req->cmobile)) {
    return back()->with('error', 'Mobile number must be exactly 10 digits, and contain only numbers (0-9).');
       }

        $customer = DB::table('customers')
                    ->insert([
                     'name'=>$req->cname,
                     'mobile'=>$req->cmobile,
                     'email'=>$req->cemail,
                     'address'=>$req->caddress
                    ]);
        if($customer) {
           return redirect('/customers');
        }
    }

    public function deleteCustomer(string $id) {
        $customer = DB::table('customers')
                    ->where('id', $id)
                    ->delete();
    if($customer) {
        return redirect('/customers');
        }
    }
}
