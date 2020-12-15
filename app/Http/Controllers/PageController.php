<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\category;
use App\post;
use DB;
use Illuminate\Support\Facades\Auth;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        if(Auth::check())
        {
            view()->share('user', Auth::user());
        }
    }
    public function index()
    {
        $post = post::take(8)->get();
        $cat_info = post::groupBy('category_id')->select('category_id', DB::raw('count(*) as total'))->get();
        return view('pages.firstpage', ['cat' => $cat_info, 'top_post' => $post]);
    }

    public function detail($id)
    {
        $post = post::find($id);
        $post_relate = post::where('category_id', '=', $post->category_id)->take(4)->get();
        return view('pages.detail', ['post' => $post, 'post_relate' => $post_relate]);
    }
    
    public function getlogin()
    {
        return view('pages/login');
    }
    public function getpost()
    {
        return view('pages/postnews');
    }
    public function getlogout()
    {
        Auth::logout();
        return redirect('index');
    }
    public function getprofile($id){
        return view('pages/profile');
    }
    public function postlogin(Request $req)
    {
        $email = $req->email;
        $password = $req->password;
        $this->validate($req,
        ['email' => 'required',
        'password' => 'required|min:6'],
        ['email.required' => "Email cannot empty",
        'password.required' => "Password cannot empty",
        'password.length' => "Password lengt must be at least 6 characters"]);
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password]))
        {
            return redirect('index');
        }
        else return redirect('login')->with('notify','Wrong email or password. Please try again!  ');
    }
}
