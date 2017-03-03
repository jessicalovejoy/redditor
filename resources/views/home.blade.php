@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (session('status'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 {{ session('status') }}
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/subreddit/new">Create new subreddit</a>
                    <hr>
                    @if($subreddits->isEmpty())

                    <p>You Haven't created any subreddits yet</p>
                    
                    @else
                    @foreach($subreddits as $subreddit)

                    <p>{{$subreddit->name}}</p>

                    @endforeach
                    @endif 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
