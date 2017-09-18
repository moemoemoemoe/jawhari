@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Works</div>

                <div class="panel-body">
<form method="POST" enctype="multipart/form-data" class="well" style="direction: rtl">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        <input type="text" name="title" placeholder="Title *" class="form-control" value="{{old('title')}}">
    </p>
    <p>
       <textarea name="content" class="form-control" value="{{old('content')}}" style="direction: rtl"></textarea>
    </p>
   
   
  
<p>
        <b>
            Choose a photo/s
        </b>
    </p>
    <p>
        <input type="file" name="photo"  class="form-control" multiple/>
    </p>
    <p>
        <input type="submit" value="Save" class="btn btn-primary form-control">
    </p>

    </form>
                </div>
            </div>
        </div>
    </div>
         <div class="row">
                                                            
@foreach($works as $article)
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
           
                <b>{{$article->title}}</b> 
               
            </div>
            <div class="panel-body" style="height:150px ; background: url('{{asset('uploads/works/'.$article->image_url_original)}}'); background-size: cover; background-position: center center;background-repeat: no-repeat;">
                
            </div>
            <div class="panel-footer text-center">
                <a href="{{route('delete_works', $article->id)}}" class="btn btn-danger form-control">Delete</a>
            </div>
        </div>
    </div>

    @endforeach
    </div>
</div>
@endsection
