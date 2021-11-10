<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;

class NewsController extends Controller
{
  public function index()
  {
    // $response = User::all();
    $response = Http::get('https://api.npoint.io/4c76a64fb047d913e785');
    // dd($response);
    $res = $response["data"];
    $r = $res["rows"];
    // dd($r);

    return view('news/index', compact('r'));
  }
  public function register()
  {
    return view('news/register');
  }
  public function login()
  {
    return view('news/login');
  }
  public function listuser()
  {
    $user = USer::all();
    return view('news/listuser', compact('user'));
  }
}
