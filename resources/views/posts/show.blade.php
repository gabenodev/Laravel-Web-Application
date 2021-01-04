@extends('layouts.app')

@section('content')

<a href="/post" class="btn btn-default"> Back to Posts </a><br>
    <h1>{{$post->title}}</h1>
    <hr>
    <p>{{$post -> body}} </p>
        <div class = "row">
            <div class ="col-md-12">
                 <img style="width: 100%" src="/storage/cover/{{$post->cover_image}}" alt="" >
            </div>
        </div>
<hr>    

    <small>Written on {{$post->created_at}} by {{$post->name}}</small><br>
    

    
    @if(!Auth::guest())
        @if(Auth::user()->id == $post -> user_id)
    <hr>
    <a href="/post/{{$post -> id}}/edit" class= "btn btn-default">Edit Post</a><br>
    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy' , $post->id  ],'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}

        @endif
    @endif

  
    <div class = "row">
        <div id= "comment-form">
            {{Form::open(['route'=> ["comments.store",$post->id], 'method'=> "POST"])}}
        <hr>
        <div class= "row">
               
                    {{Form::label('comment',"Comment:")}}
                    {{Form::textarea('comment',null,['class' => 'form-control'])}}
                    {{Form::submit("Add Comment", ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px', 'rows' => 5])}}
                
            </div>
        </div>
    </div>
   
@endsection