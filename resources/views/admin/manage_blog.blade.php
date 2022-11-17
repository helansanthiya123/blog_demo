@extends('admin.admin_master')

@section('title')
Manage Blog
@endsection

@section('add-blog')
    <div class="container mt-5">
        <div class="row">
            @if(Session::has('delete'))
                <div class="alert alert-danger alert-dismissible">
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                    {{Session::get('delete')}}
                </div>
            @endif
            <div class="col col-sm-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-info">title</th>
                            <th class="text-uppercase text-info">description</th>
                            <th class="text-uppercase text-info">image</th>
                            <th class="text-uppercase text-info">topic</th>
                            <th class="text-uppercase text-info" colspan="2">action</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tax as $blog_detail)
                        <tr>
                            <td>{{$blog_detail->title}}</td>
                            <td>{{$blog_detail->description}}</td>
                            <td><img src="{{asset('images/'.$blog_detail->image_path)}}" alt="" width="100" height="100"></td>
                            <td>{{$blog_detail->topic}}</td>
                            <td><a href="{{url('blog-edit')}}/{{$blog_detail->id}}">Edit</a></td>
                            <td><a href="{{url('blog-delete')}}/{{$blog_detail->id}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection