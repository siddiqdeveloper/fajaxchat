<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
class PaymentController extends Controller
{
   
   public function index()
   {
        return view('payment');
   }
   public function pay(Request $request){
         $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                    array("X-Api-Key:api_key",
                          "X-Auth-Token:api_auth_token"));
        $payload = Array(
            'purpose' => 'NiceSnippets',
            'amount' => $request->amount,
            'phone' => $request->mobile_number,
            'buyer_name' => $request->name,
            'redirect_url' => 'http://localhost:8000/payment-success',
            'send_email' => true,
            //'webhook' => 'http://www.example.com/webhook/',
            'send_sms' => true,
            'email' => $request->email,
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch); 
        return [$response = json_decode($response)];
        return redirect($response->payment_request->longurl);

 }
 
 public function success(Request $request){
     try {
 
        $api = new \Instamojo\Instamojo(
            config('services.instamojo.api_key'),
            config('services.instamojo.auth_token'),
            config('services.instamojo.url')
        );
 
        $response = $api->paymentRequestStatus(request('payment_request_id'));
 
        if( !isset($response['payments'][0]['status']) ) {
           dd('payment failed');
        } else if($response['payments'][0]['status'] != 'Credit') {
             dd('payment failed');
        } 
      }catch (\Exception $e) {
         dd('payment failed');
     }
    dd($response);
  }
}