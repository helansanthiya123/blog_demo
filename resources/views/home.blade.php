@extends('layouts.master')

@section('title','Home Page')

@section('main-content')
     
       

@include('layouts.slider')

    <div class="container mt-5 ">
        
        <div class="row ">
        @foreach($details as $rec)
            <div class="col-md-6 mt-3">
                <div class="card">
                  <div class="row card-body">
                    <div class="col-sm-6  text-start text-capitalize">
                       
                        <h3 class="text-info">{{$rec->title}}</h3>             
                        <p class="card-text">
                        <!-- <a href="#">Continue reading</a> -->
                        {{$rec->description}}
                        </p>
                        <strong >{{$rec->topic}}</strong>
                        </div>
                        <img class="col-sm-6" src="{{asset('images/'.$rec->image_path)}}" alt="sans" height="230" />
                    </div>
                </div>
            </div>
            @endforeach
            
            <!-- <div class="col-md-6">
                <div class="card">
                  <div class="row card-body">
                    <div class="col-sm-6 text-start text-capitalize">
                       <strong class="text-info">test</strong>
                        <h3>Featured Post</h3>             
                        <p class="card-text">
                        <a href="#">Continue reading</a>
                        </p>
                        </div>
                        <img class="col-sm-6" src="{{asset('images/tree-736885__480.jpg')}}" alt="sans" height="230"/>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
                
@endsection 
       
@section('script')
<script>
    $(document).ready(function(){
        $('#test').on('click',function(){
                    alert('test')
                });

                
    });
         
        </script>
@endsection