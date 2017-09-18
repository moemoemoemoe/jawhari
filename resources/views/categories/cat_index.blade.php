@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create Category</div>

                <div class="panel-body">
                   <form method="POST" enctype="multipart/form-data" class="well">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <p>
        <input type="text" name="cat_name" placeholder="Category name" class="form-control" value="{{old('cat_name')}}">
    </p>
    <p>
        <input type="submit" value="Save" class="btn btn-primary form-control">
    </p>
    </form>
                </div>
            </div>
        </div>
        <hr/>
@foreach($category as $cat)

 <div class="col-md-2">
        <div class="panel panel-default">
            <div class="panel-heading text-center">

          
            </div>
            <div class="panel-body" style="text-align: center;">
               <span style="text-align: center;font-weight: 900;color: #3cba54"> {{$cat->cat_name}}</span>
            </div>
            <div class="panel-footer text-center">
             <a href="{{route('delete_cat', $cat->id)}}" class="btn btn-danger form-control">Delete</a>
               </div>
               <div class="panel-footer text-center">
              
               
            </div>
        </div>
    </div>
@endforeach
    </div>




</div>
@endsection
