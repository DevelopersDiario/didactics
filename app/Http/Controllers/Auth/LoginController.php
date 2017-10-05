<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

   use AuthenticatesUsers;
    public function showLoginForm()
    {
        return view('auth.login');
     

    }
     public function passwordHash()
     {
      /*try {
 
        $client = new Client(
    // Base URI is used with relative requests
    'base_uri' => 'http://192.168.1.77:8084/diariopws/api/1.0/user/autenticar',
    ['auth' => ['benjamin@gmail.com', 'benjamin123']
    // 'base_uri' => 'http://192.168.1.66:8084/diariopws/api/1.0/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);
 
          // echo $apiRequest->getStatusCode());
          // echo $apiRequest->getHeader('content-type'));
 
          $content = json_decode($apiRequest->getBody()->getContents());
 
      } catch (RequestException $re) {
          //For handling exception
      }*/
 }


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
