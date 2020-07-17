<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;

//call of the API
class ApiController extends Controller
{

    public function getAPIData()
    {

        $data = Http::get('https://jsonplaceholder.typicode.com/posts')->json();

        return view('api', ['data' => $data]);
    }


}
// $data = Http::get('http://api.guestcentric.net/data/hotels', [
//     'gettingreadytoflywithguestcentric' => 'api_key'])->json();

// return view('api_data', ['data' => $data]);