<?php namespace App\Controllers;
use  Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Auth ;
use App\models\User;


Class ConnexController extends Controller{


public function getLogin() {

return View('login');




}


public function postLogin() {


 
// validate the info, create rules for the inputs
$rules = array(
    'email'    => 'required|email', // make sure the email is an actual email
    'mdp' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
);

// run the validation rules on the inputs from the form
$validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
if ($validator->fails()) {
    return Redirect::to('login')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('mdp')); // send back the input (not the password) so that we can repopulate the form
}

else {

    // create our user data for the authentication
    $userdata = array(
        'email' => Input::get('email'),
        'mdp'  => Input::get('mdp')
    );

    // attempt to do the login
    if (Auth::attempt($userdata)) {
    	

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
        return Redirect::route('home');

    } else {        

        // validation not successful, send back to form 
        return Redirect::route('home');

    }



 






}



}
}
?>




	


