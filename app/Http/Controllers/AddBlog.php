<?php

namespace App\Http\Controllers;

use App\Models\Add_Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AddBlog extends Controller
{
    public function save(Request $request)
    {
        $addblog = new Add_blog;

        $addblog->title = $request->title;
        $addblog->description = strip_tags($request->description);
        $addblog->image_path = $request->image->getClientOriginalName();
        
        $image_name=$request->image->getClientOriginalName();

        $requestValidate=$request->validate(['image'=>'mimes:jpeg,png,jpg,gif|max:1024']);
        $request->file('image')->move(public_path('/images'),$image_name);

        $addblog->topic = $request->topic;
        $addblog->publish_status = $request->publish_status;

        $addblog->save();

        Session::flash('save_success','Added successfully');
        return back(); 

        // return dd(strip_tags($request->description));
    }

    public function show()
    {
         $details=Add_Blog::get();
        return view('home')->with(compact('details'));
    }
   
}
