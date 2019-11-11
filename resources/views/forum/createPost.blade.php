@extends('layouts.app')
@section('content')
<div class="container" id="card-create-post">

  <div class="card">
    <div class="card-header">
      <h2>Create a new post</h2>
    </div>
          <div class="card-body">
            @include('forum.partials.sharePost')
          </div>
  </div>
</div>

@endsection
