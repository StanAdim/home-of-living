@extends('layouts.app')
@section('content')
    <div class="text-center">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">HLI FORUM</h1>
                <p class="lead">Lets Enlighten ourselves by sharing the knowledge We are blessed with</p>
            </div>
        </div>

    </div>
    <div class="content container-fluid">
        <div class="row hli_bg">
            <div class="col-md-3">
                <div class="alert alert-success text-center">
                    <span class="h4">DISCUSSION TOPICS</span>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Business</a>
                    <a href="#" class="list-group-item list-group-item-action">Leadership</a>
                    <a href="#" class="list-group-item list-group-item-action">Agriculture</a>
                    <a href="#" class="list-group-item list-group-item-action">Environment</a>
                    <a href="#" class="list-group-item list-group-item-action ">Culture</a>
                </div>
                  <a href="{{route('forum.post-create')}}" class="btn btn-lg btn-primary btn-block" id="share-btn">Share New Post</a>
            </div>
            <div class="col-md-6 ">
                <div class="alert alert-success text-center">
                    <span class="h4">TOPIC TITLE</span>
                </div>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta doloribus eaque
                    eligendi ipsum libero vel. Aut consequatur deserunt, dolo
                    res fuga in sint soluta veniam! Fuga nam odit officia perspiciatis provident!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta doloribus eaque
                    eligendi ipsum libero vel. Aut consequatur deserunt, dolo
                    res fuga in sint soluta veniam! </p>
                <hr>
                {{--THE END OF TOPIC SUMMARY--}}


                <div class="alert alert-success text-center">
                    <span class="h4">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        OPEN SHARED POST <span class="text-danger">{{count($posts)}}</span>
                      </button>
                      </span>
                </div>
            @include('forum.partials.posts')
                <hr>

            </div>
            <div class="col-md-3">
                <div class="alert alert-success text-center">
                    <span class="h4">COMMENTS </span>
                    @foreach($comments as $comment)
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$comment->comment}} <small class="text-muted float-right">{{$comment->email}}</small></li>

                        </ul>

                        @endforeach
                </div>
                <p class="justify-content-center">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#commentCollapse" aria-expanded="false" aria-controls="commentCollapse">
                        <small>Add you comment</small>
                    </button>
                </p>
                @include('forum.partials.commentCollapse')
                <hr>
            </div>
            <hr>
        </div>
    </div>

@endsection
