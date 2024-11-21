<?php 
namespace App\Controllers\admin;
use App\Models\Transactions as TransactionModel;
use App\Models\User;

class Transactions {
    private $transactionsModel,$userModel;
    public function __construct()
    {
        $this->userModel = new User();
        $this->transactionsModel = new TransactionModel();
    }
    //Customer Transaction history
    public function allHistory()
    {

             $transactions=$this->transactionsModel->all();
             //Get customer name
             $transactionsHistory=[];
             foreach ($transactions as $transaction)
             {
                $user=$this->userModel->findByEmail($transaction['userEmail']);
                $transaction['customerName']=$user['name'];
                if(!isset($transaction['balance_added']))
                {
                    $transaction['balance_added']= 0;
                }
                $transactionsHistory[]=$transaction;
             }
             $titleHeaders='Customer Transaction';

             //dd($transactionsHistory);
             usort($transactionsHistory,function($a, $b) {
                 return $b['created_at'] <=> $a['created_at'];
             });

            return view('admin/transactions',compact('transactionsHistory','titleHeaders'));

    }

    
    public function userHistory(string $userId)
    {
        //dd($userId);
        $user=$this->userModel->where('id',$userId);
        if(!$user)
        {
            throw new \Exception('User does not exist');
        }

        

        $transactions=$this->transactionsModel->all('userEmail',$user['email']);
        dd($transactions);

        return view('');
    }
}
?>