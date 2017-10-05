<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class PostController extends Controller
{
	public function publicaciones()
	{

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://192.168.1.77:8084/diariopws/api/1.0/',
    // 'base_uri' => 'http://192.168.1.66:8084/diariopws/api/1.0/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);
// Send a request to http://187.188.168.51:8080/diariopws/api/1.0/publicacion/list
$response = $client->request('GET', 'publicacion/list');
   $publicaciones = json_decode( ($response ->getBody()->getContents()));
//  return view('posts.index', compact('puplications'));
  return view('posts.publicaciones',compact('publicaciones'));

	}
	/*public function index()
	{
	$client = new \GuzzleHttp\Client();

    $response = $client->get('http://187.188.168.51:8080/diariopws/api/1.0/user/autenticar', array(
        'auth' => array('correo', 'password')
    ));

    $json = $response;
    echo $json;	
	}*/
    
}
