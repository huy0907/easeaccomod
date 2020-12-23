<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\category;
use App\post;
use App\comment;
use App\favorite;
use App\province;
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
        $cat_list = category::all();
        $prov_list = province::all();
        $cat_info = post::groupBy('category_id')->select('category_id', DB::raw('count(*) as total'))->get();
        $prov_info = post::groupBy('province_id')->select('province_id', DB::raw('count(*) as total'))->get();
        $most_view = post::orderBy('views', 'desc')->take(6)->get();
        return view('pages.firstpage', ['cat' => $cat_info, 'top_post' => $post, 'prov' => $prov_info, 'most_view' => $most_view ,
        'cat_list' =>  $cat_list, 'prov_list' => $prov_list]);
    }

    public function detail($id)
    {
        $post = post::find($id);
        $post->views = $post->views + 1;
        $post->save();
        $cat_list = category::all();
        $prov_list = province::all();
        $cat_info = post::groupBy('category_id')->select('category_id', DB::raw('count(*) as total'))->get();
        $post_relate = post::where('category_id', '=', $post->category_id)->where('province_id', $post->province_id)->take(4)->get();
        $count_cmt = comment::where('post_id', '=', $post->id)->count();
        return view('pages.detail', ['post' => $post, 'post_relate' => $post_relate, 'count' => $count_cmt, 'cat' => $cat_info,
        'cat_list' =>  $cat_list, 'prov_list' => $prov_list]);
    }
    
    public function getpost()
    {
        $cat = category::all();
        $province = province::all();

        if(Auth::user()->isConfirm == 0)
        {
            return view("pages/refuse");
        }
        else return view('pages/postnews', ['cat'=> $cat, 'province' => $province]);
    }

    public function postPost(Request $req)
    {
        $this->validate($req,
        ['category' => 'required',
        'name' => 'required|min:3|unique:post,name',
        'price' => 'required',
        'description' => 'required',
        'address' => 'required'
        ],
        [
        'category.required' => "Your category cannot empty",
        'name.required' => "Your name cannot empty",
        'description.required' => "Your description cannot empty",
        'price.required' => "Your price cannot empty",
        'address.required' => "Your address cannot empty"
        ]);
        $post = new post;
        $post->category_id = $req->category;
        $post->province_id = $req->province;
        $post->views = 0;
        $post->idOwner = Auth::user()->id;
        $post->name = $req->name;
        $post->price = $req->price;
        $post->description = $req->description;
        $post->address = $req->address;
        $post->isConfirm = 0;
        
        
        if($req->hasFile('image'))
        {
            $file = $req->file('image');
            $name = $file->getClientOriginalName();

            $name = str_random(4)."_".$name;
            $file->move("image", $name);
            $post->image = $name;
        }
        else
        {
            $post->image = "";
        }
        if(isset($req->wash_machine))
        {
            $post->wash_machine = 1;
        }
        else $post->wash_machine = 0;
        
        if(isset($req->wifi))
        {
            $post->wifi = 1;
        }
        else $post->wifi = 0;
        if(isset($req->tv))
        {
            $post->tv = 1;
        }
        else $post->tv = 0;
        if(isset($req->air_con))
        {
            $post->air_con = 1;
        }
        else $post->air_con = 0;
        if(isset($req->camera))
        {
            $post->camera = 1;
        }
        else $post->camera = 0;
        if(isset($req->garden))
        {
            $post->garden = 1;
        }
        else $post->garden = 0;
        if(isset($req->heater))
        {
            $post->heater = 1;
        }
        else $post->heater = 0;
        if(isset($req->pool))
        {
            $post->pool = 1;
        }
        else $post->pool = 0;

        if(isset($req->market))
        {
            $post->market = 1;
        }
        else $post->market = 0;

        if(isset($req->school))
        {
            $post->school = 1;
        }
        else $post->school = 0;

        if(isset($req->hospital))
        {
            $post->hospital = 1;
        }
        else $post->hospital = 0;

        if(isset($req->park))
        {
            $post->park = 1;
        }
        else $post->park = 0;

        if(isset($req->stadium))
        {
            $post->stadium = 1;
        }
        else $post->stadium = 0;

        if(isset($req->bus))
        {
            $post->bus = 1;
        }
        else $post->bus = 0;
        $post->save();
        return redirect('post')->with('notify', 'Tin đăng của bạn đang được xét duyệt. Bạn sẽ nhận được thông báo khi thành công');
    }
    public function getprofile($id){
        $us = User::find($id);

        return view('pages/profile', ['us' => $us]);
    }
    public function getEdit($id)
    {
        return view('pages/editprofile');
    }
    
    
    public function getEditPost($id)
    {
        $post = post::find($id);
        $cat = category::all();
        $province = province::all();
        return view('pages/editPost', ['post' => $post, 'cat' => $cat, 'province' => $province]);
    }
    public function postEditPost(Request $req,$id)
    {
        $post = post::find($id);
        $this->validate($req,
        ['category' => 'required',
        'name' => 'required|min:3',
        'price' => 'required',
        'description' => 'required',
        'address' => 'required'
        ],
        [
        'category.required' => "Your category cannot empty",
        'name.required' => "Your name cannot empty",
        'description.required' => "Your description cannot empty",
        'price.required' => "Your price cannot empty",
        'address.required' => "Your address cannot empty"
        ]);
        $post->category_id = $req->category;
        $post->name = $req->name;
        $post->price = $req->price;
        $post->description = $req->description;
        $post->address = $req->address;
        $post->province_id = $req->province;
        if($req->hasFile('image'))
        {
            $file = $req->file('image');
            $name = $file->getClientOriginalName();
            $name = str_random(4)."_".$name;
            $file->move("image", $name);
            $post->image = $name;
        }
        if(isset($req->wash_machine))
        {
            $post->wash_machine = 1;
        }
        else $post->wash_machine = 0;
        
        if(isset($req->wifi))
        {
            $post->wifi = 1;
        }
        else $post->wifi = 0;
        if(isset($req->tv))
        {
            $post->tv = 1;
        }
        else $post->tv = 0;
        if(isset($req->air_con))
        {
            $post->air_con = 1;
        }
        else $post->air_con = 0;
        if(isset($req->camera))
        {
            $post->camera = 1;
        }
        else $post->camera = 0;
        if(isset($req->garden))
        {
            $post->garden = 1;
        }
        else $post->garden = 0;
        if(isset($req->heater))
        {
            $post->heater = 1;
        }
        else $post->heater = 0;
        if(isset($req->pool))
        {
            $post->pool = 1;
        }
        else $post->pool = 0;

        if(isset($req->market))
        {
            $post->market = 1;
        }
        else $post->market = 0;

        if(isset($req->school))
        {
            $post->school = 1;
        }
        else $post->school = 0;

        if(isset($req->hospital))
        {
            $post->hospital = 1;
        }
        else $post->hospital = 0;

        if(isset($req->park))
        {
            $post->park = 1;
        }
        else $post->park = 0;

        if(isset($req->stadium))
        {
            $post->stadium = 1;
        }
        else $post->stadium = 0;

        if(isset($req->bus))
        {
            $post->bus = 1;
        }
        else $post->bus = 0;
        $post->save();
        return redirect('editpost/'.$id)->with('notify', 'Chỉnh sửa tin đăng thành công!');
    }
    public function getFilter()
    {
        $data = post::all();
        $cat = category::all();
        $prov = province::all();
        return view('pages/filter',[ "data" => $data, "cat" => $cat, "prov" => $prov]);
    }
    public function getResult(Request $req)
    {

        $cat = category::all();
        $data = post::query();
        if($req->has('cat_id'))
        {
            $data->where('category_id', $req->cat_id);
        }
        if($req->has('province'))
        {
            $data->where('province_id', $req->province);
        }
        if($req->has('price'))
        {
            $price = explode("-",$req->price);
            $start = $price[0];
            $end = $price[1];
            $data->where('price', '>=', $start * 1000000 );
            $data->where('price', '<=', $end * 1000000 );
        }
        if($req->has('area'))
        {
            $area = explode("-",$req->area);
            $start = $area[0];
            $end = $area[1];
            $data->where('area', '>=', $start * 1000000 );
            $data->where('area', '<=', $end * 1000000 );
        }
        if(count($data->get()) == 0)
        {
            echo "<h1 align='center'>Không tìm thấy kết quả</h1>";
        }
        else return view('pages/result', ['data' => $data->get(), 'cat' => $cat]);
    }

    public function getReport($id)
    {
        
        return view('pages/report', ['post_id' => $id]);
    }
    public function getHeader($id)
    {
        $cat = category::all();
        $prov=  province::all();
        $data = post::query();
        $data->where('category_id', $id);
        return view('pages/filter', ['data' => $data->get(), 'cat' => $cat, 'cat_id' => $id, 'prov' => $prov]);
    }
    public function getAddFavor(Request $req)
    {
        $favor = new favorite;
        $favor->user_id = $req->user_id;
        $favor->post_id = $req->post_id;
        $favor->save();
        echo "Đã thêm vào danh sách tin yêu thích";
    }
}
