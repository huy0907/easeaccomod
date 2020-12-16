<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\category;
use App\post;
use App\comment;
use DB;
use App\User;
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
        $prov_info = post::groupBy('province_id')->select('province_id', DB::raw('count(*) as total'))->get();
        $most_view = post::orderBy('views', 'desc')->take(6)->get();
        return view('pages.firstpage', ['cat' => $cat_info, 'top_post' => $post, 'prov' => $prov_info, 'most_view' => $most_view ]);
    }

    public function detail($id)
    {
        $post = post::find($id);
        $post->views = $post->views + 1;
        $post->save();
        $post_relate = post::where('category_id', '=', $post->category_id)->where('province_id', $post->province_id)->take(4)->get();
        $count_cmt = comment::where('post_id', '=', $post->id)->count();
        return view('pages.detail', ['post' => $post, 'post_relate' => $post_relate, 'count' => $count_cmt]);
    }
    public function getregister()
    {
        return view('pages/register');
    }
    public function postregister(Request $req)
    {
        $this->validate($req,
        ['role' => 'required',
        'password' => 'required|min:6',
        'email' => 'required|unique:users,email',
        ],
        [
        'role.required' => "Bạn hãy chọn loại người dùng",
        'email.required' => "Your email cannot empty",
        'password.required' => "Your password cannot empty",
        'password.min' => "Your password length must be at least 6 characters",
        'email.unique' => "Your email must be unique",
        
        ]);
        $user = new User;
        $user->idRole= $req->role;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        if($user->idRole == 1)
        {
            $user->isConfirm = 0;
        }
        else  $user->isConfirm = 1;
        $user->save();
        return redirect('register')->with('notify', 'Register succesfully!');
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
        $us = User::find($id);

        return view('pages/profile', ['us' => $us]);
    }
    public function getEdit($id)
    {
        return view('pages/editprofile');
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
    
    public function getEditPost($id)
    {
        return view('pages/editPost');
    }
}
