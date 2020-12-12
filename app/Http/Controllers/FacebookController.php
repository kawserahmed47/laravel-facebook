<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FacebookController extends Controller
{
    public function feed(){


    
        $response = Http::get("https://graph.facebook.com/v9.0/2078896822342242/feed?access_token=EAAC7CY5flAYBACE9dAu0UPP9O6D5z41JFuWtcFEO4oLoKQQipu9Bb0tZBfM6e7020yZAv68t0wN05xaCP0PGfW6iby2ljNfRZA1Xvw0UhqyJeQip8YwhsOHNVxopUgSjyCbJUnt5jnCZC69FPP1D6zfchR9TxEWp0nVlTZAoup4CnlxAwkL1ZCeAHGJcZClsDqZBVgZBx7v5LaAZDZD");
       
        return view('facebook.feed')->with('feeds', $response->json());
    }

    public function fbPost(){
      

        $response = Http::post("https://graph.facebook.com/v9.0/2078896822342242/feed?message=Test Message&access_token=EAAC7CY5flAYBANuZBNqb6cdLibSKIT8yNQz8Ld06Wrf27D8hwdzrbI4WrZAAmIhpfOA262dPPr703XOWSawQ3zVZAMsrNuOlmlrzZB7RXkMYQOW1QjrHLHoDMx5Jth0lcjOjCbNWF6mp3DE5v8PjcVtmRlZCgFgRfqbVXMZBfYSTTx0cG6Ey5AQqqKNXfGkEe1ZCHmXV6KpVwZDZD");

        // return view('facebook.feed')->with('feeds', $response->json());
        print_r($response->json());
    }
}
