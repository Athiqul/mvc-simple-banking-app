<?php 
namespace App\Controllers\customers;

class Dashboard{
    public function index(){
        middleware('customer');
        return view('customers/dashboard');
    }
}

?>