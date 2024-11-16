<?php 
namespace App\Controllers\customers;
use App\Models\Transactions;
use App\Models\User;

class Deposit{
    private $trxModel,$userModel;
    public function __construct()
    {
        middleware('customer');
        $this->trxModel = new Transactions();
        $this->userModel = new User();
    }

    //For Deposit View
    public function depositView()
    {
         $userEmail=$_SESSION['user']['email'];
         $user = $this->userModel->findByEmail($userEmail);
         return view('customers/deposit',['title'=>'Deposit Balance','user'=>$user]);
    }

    //Store Deposit Amount
    public function depositStore()
    {
        $amount=$_POST['amount'];
        //Validation 
        $errors=[];
        if(!is_numeric($amount)||$amount<1)
        {
          $errors[] = ['amount'=>'Amount should be numeric and positive value'];
          return redirect()->route('/customers-deposit')->withErrors($errors)->withInput($_POST);
        }
        
        $userEmail=$_SESSION['user']['email'];
        $user = $this->userModel->findByEmail($userEmail);
        if(empty($user))
        {
            http_response_code(404);
            echo "Operation not allowed";
            exit();
        }

        $user['balance'] += $amount;

        //Save Transactions
        

    }
}

?>