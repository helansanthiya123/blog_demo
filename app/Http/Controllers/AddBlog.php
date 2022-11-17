<?php

namespace App\Http\Controllers;

use App\Models\Add_Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AddBlog extends Controller
{
    public function show()
    {
         $details=Add_Blog::get();
        return view('home')->with(compact('details'));
    }
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

    public function edit($id)
    {
        $edit_blog=Add_blog::find($id);
        return view('admin.edit_blog',compact('edit_blog'));
    }    
    public function update(Request $request)
    {
        $update_blog=Add_blog::find($request->id);
        $update_blog->title=$request->title;
        $update_blog->description=strip_tags($request->description);
        $update_blog->image_path=$request->image->getClientOriginalName();
        $request->file('image')->move(public_path('images/'),$request->image->getClientOriginalName());
        $update_blog->topic=$request->topic;

        $update_blog->save();
        Session::flash('update','Updated successfully');
        return redirect("admin/add_blog");
        // return view('admin.add_blog');
    }

    public function delete($id)
    {
        $delete_blog=Add_blog::find($id);
        $delete_blog->delete();

        Session::flash('delete','Blog deleted');
        return back();
    }
   
}
