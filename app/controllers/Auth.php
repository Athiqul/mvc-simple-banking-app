<?php 
namespace App\Controllers;

use App\Models\User;

class Auth{
    public function login(){
       return view('auth/login');
    }

    public function logout(){
       // Implement logout functionality
    }

    public function checkLogin(){
        extract($_POST);

        $errors=[];
        // Implement login validation and authentication
        if(!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
        {
             // Email field is not valid
             $errors[]=['email'=>'Provide valid email address!'];
             // Redirect to login page with errors
             return redirect()->route('/login')->withErrors($errors);
        }

        if(!isset($password))
        {
             // Password field is empty
             $errors[]=['password'=>'Provide valid password!'];
             return redirect()->route('/login')->withErrors($errors);
        }


        // Implement password encryption and authentication
        // Check if user exists in the file system
        $userModel=new User();
        $user=$userModel->where('email',$email);
        //dd($user);
        if(count($user)<1)
        {
         return redirect()->route('/login')->with(['error','Wrong credentials']); 
        }

        if(!password_verify($password,$user['password']))
        {
         return redirect()->route('/login')->with(['error','Wrong credentials']); 
        }
        // If user exists, log them in and redirect to dashboard
        // If user does not exist, display an error message and redirect to login page
        // Redirect to dashboard if successful
        // Redirect to login page if failed

        session_start();
        $_SESSION['user'] = $user;
        dd($user);
        return redirect()->route('/dashboard')->with(['success','Successfully Logged in']);
    }

    public function register(){
       return view('auth/register');
    }
}

?>