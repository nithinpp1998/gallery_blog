 @extends('Admin.Layouts.layout')
 @section('content')
 <div class="wrapper">
<div class="container">
<h2 style="margin-bottom: 20px;">Gallery</h2>

<!-- @if($errors->any())
    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
@endif -->
        <form id="form" action="{{url('update')}}" name="form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="hidden" id="hidden" value="{{$edited->id}}">
            @csrf
            <div class="form-group col-md-6">
                Title :
                <input type="text" class="form-control" value="{{$edited->title}}" name="title" id="title" placeholder="enter title">
                
            <div class="form-group col-md-12" >
            Detail :
                <textarea id="detail" class="form-control" name="detail" >{{$edited->detail}}</textarea>               
            </div>

            <div class="form-group col-md-12" >
            Description :
                <textarea id="desc" class="form-control" name="desc" >{{$edited->description}}</textarea>               
            </div>

            <div class="form-group col-md-12" >
                image :              
                 <input type="file" class="form-control" name="file" id="file" > 
                 <img src="{{asset('uploads/'.$edited->image)}}" alt="" width="80px" height="80px">   
            </div>
            <div>
            <input type="submit" class="btn btn-success" name="submit" id="submit">
            </div>
        </form>
    </div>
 </div>
    @endsection
 