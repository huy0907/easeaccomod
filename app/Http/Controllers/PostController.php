<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\category;
use App\post;
use App\comment;
use App\facility;
use App\province;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
        $post = post::orderBy('id','DESC')->get();
        return view('admin/post/list', ['post' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postAdd(Request $req)
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
        $post->isConfirm = 1;
        
        
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
        return redirect('admin/post/add')->with('notify', 'Add post sucessfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getAdd()
    {
        $cat = category::all();
        $province = province::all();
        return view('admin/post/add', ['cat'=> $cat, 'province' => $province]);
    }

    public function getEdit($id)
    {
        $post = post::find($id);
        $cat = category::all();
        $province = province::all();
        return view('admin/post/edit', ['post' => $post, 'cat' => $cat, 'province' => $province]);
    }

    public function postEdit(Request $req,$id)
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
        $post->idOwner = Auth::user()->id;
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
        return redirect('admin/post/edit/'.$id)->with('notify', 'Edit post sucessfully!');
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDelete($id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect('admin/post/list')->with('notify', 'Delete post sucessfully!');
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
