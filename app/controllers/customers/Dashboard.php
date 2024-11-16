<?php 
namespace App\Controllers\customers;

class Dashboard{
    public function __construct(){
        middleware('customer');
    }
    public function index(){
        
        return view('customers/dashboard');
    }

    


}

?>