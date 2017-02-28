@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Front page</h1>

    @foreach ($posts as $post)

    <a>{{$post->title}}</a></br>
   

    
   <p>{{$post->user_id}}</p></br>

   

    @endforeach

</div>
@endsection
