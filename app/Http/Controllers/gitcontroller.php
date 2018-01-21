<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Response;
use App\assessment;
use Illuminate\Http\Request;

class gitcontroller extends Controller
{

  public function index(Request $request){
    $client = new \GuzzleHttp\Client();
    $res = $client->request('GET', 'https://api.github.com/search/repositories?q=language:PHP&sort=stars&order=desc')->getBody();
    $member = json_decode($res);

    foreach($member->items as $result)
    {

    $request['user_id'] = $result->id;
    $request['name'] = $result->name;
    $request['url'] = $result->url;
    $request['created_date'] = $result->created_at;
    $request['last_push_date'] = $result->pushed_at;
    $request['description'] =  $result->description ?: '';
    $request['no_of_star'] = $result->stargazers_count;
    $item = assessment::updateOrCreate($request->all());
    }
    return view('welcome', compact('member'));
  }

  public function show($user_id) {
    $item = assessment::where('user_id', $user_id)->firstOrFail();
    return view('ddetails', compact('item'));
  }


}
