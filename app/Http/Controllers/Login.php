<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Validator;

use App\Models\User;
use App\Models\Contacts;
use App\Models\Products;
use Hash;
use Auth;
use Session;
use  Mail;
use JWTAuth;
use App\Jobs\TestMail;
use Laravel\Socialite\Facades\Socialite;


use App\Mail\Test;
use App\Event\UserDeleted;
use DB;
class Login extends Controller
{

    public function getdata(){
    
           return Contacts::get();
    }

    
    public function index(){


        

        $list=  Contacts::get();
        return view('home',compact('list'));
    }

     public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function login(Request $req){

        event (new UserDeleted('abc@gmail.com'));


        if(Auth::check()){
             return redirect('myprofile');
        }else{
             return view('login');
        }
    }


    public function register(Request $req){
        return view('register');
    }

    public function loginpost(Request $req){
        $inputs  =  $req->all();

       $login =  Auth::attempt(["email"=>$inputs['email'],"password"=>$inputs['password']]);

       if($login){
            return redirect('myprofile');
       }

       return redirect()->back()->with('msg','email and password is wrong');

    }


    public function userregister(Request $req){
        $inputs = $req->all();


        $check = Validator::make( $inputs,[
            'email'=>'required',
            'password'=>'required'
        ])->validate();




        if(isset($check->fails)){
            return redirect()->back()->withErrors($check,'erros');
        }




         if(isset($check->fails)){
            return redirect()->back()->withErrors($check,'erros');
         }

         // $password =  Hash::make($inputs['password']);
         // User::insert(['email'=>$inputs['email'],'password'=>$password]);

         // User::create($inputs);

        return redirect('/');
    }


    public function myprofile(){

        return view('myprofile');

    }


    public function logout(){
        Auth::logout();

        return redirect('/');
    }

    public function userlist(){

        return $records = User::get();

        //return view('userList')->with('records',$records);

    }


    public function products(){

        $products =   Products::get();
        return view('products',compact('products'));

    }

    public function userupdate(Request $req){

        $inputs =  $req->all();

        User::where('id',$inputs['editId'])->update(['email'=>$inputs['email']]);

        return redirect()->back();

    }


    public function addtocard(Request $req){

        $req = $req->all();


      //  return $req['id'];

        $card = [];

       

        if(Session::has('products')){

            $oldList =  Session::get('products');
            array_push($oldList, $req['id']);
            Session::put('products',$oldList);
            $card = $oldList;

        }else{

            $list = [$req['id']];
            Session::put('products',$list);

           // return $list;
            $card = $list;
        }

        //return $card;

        return redirect('checkout');
    }

    public function checkout(){

         $products =  Session::get('products');

         $products = Products::whereIn('id',$products)->get();


         return view('checkout',compact('products'));

    }





    public function delete($idval){


        User::where('id',$idval)->delete();
        return redirect()->back();
    }

    public function userview($idval){

        $user =  User::where('id',$idval)->first();

        return view('userview')->with('user',$user);

        //return $user->email;
    }

    public function test(){
        $records =  User::with('getContact')->first();

        return view('test',compact('records'));

    }

    public function sendmail(){

       

    }


    public function dbtransaction(){
    
    //     $data  = [

    //         ['name'=>'one','airline'=>'12','count'=>1],
    //         ['name'=>'tow','airline'=>'12','count'=>1],
    //         ['name'=>'12','airline'=>'12','count'=>1]

    // ];

    //     DB::table('flights')->insert($data);

        // DB::transaction(function(){

        //     User::create(); --works


        //     $upate = new FLigt(); --error

        // });




        // return DB::table('flights')->where('id',2)->delete();



    }


    public function registerapi(Request $request){
         $data = $request->only('name', 'email', 'password');
        $validator = Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:50'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        //User created, return success response
        return response()->json([
            'success' => true,
            'message' => 'User created successfully',
            'data' => $user
        ]);
    }

     public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        //valid credential
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:50'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is validated
        //Crean token
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Login credentials are invalid.',
                ], 400);
            }
        } catch (JWTException $e) {
        return $credentials;
            return response()->json([
                    'success' => false,
                    'message' => 'Could not create token.',
                ], 500);
        }
    
        //Token created, return with success response and jwt token
        return response()->json([
            'success' => true,
            'token' => $token,
        ]);
    }

    public function job(){

        $emailjobs = new TestMail();
        $this->dispatch($emailjobs);




        return 'hi';

    }

    public function saveForm(Request $req){

        $req = $req->all();
        unlink($req['_token']);

        Test::insert($req);

        return redirect()->back()->with('success','enquiry submitted successfully');
    }
}
