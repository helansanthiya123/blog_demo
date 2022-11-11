@extends('layouts.master')

@section('title','Home Page')

@section('main-content')
     
        <!-- <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-info">
                        Welcome to {{$name}}
                    </h1>
                   
                </div>
            </div>
            
        </div> -->

@include('layouts.slider')
                
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