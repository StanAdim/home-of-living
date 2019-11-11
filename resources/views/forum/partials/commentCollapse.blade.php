<div class="collapse" id="commentCollapse">
    <div class="card card-body commentCollapse">
        <form action="{{route('forum.comment')}}" method="post">
            @csrf

            <div class="form-group">
                <textarea class="form-control" name="comment" rows="1"  placeholder="Type something here...">{{old('comment')}}</textarea>
                @if(count($errors)>0)

                    <div class="alert alert-link">
                        <div class="text-danger">
                            {{$errors->first('comment')}}
                        </div>
                    </div>
                @endif
            </div>

            <button type="submit" class="justify-content-center mt-1 btn-block btn-sm btn btn-secondary">comment</button>
            <div class="form-group mt-1 text-hide">
                <input type="text" name="email" readonly class="form-control hide-text" id="email" value="{{auth()->user()->email}}">
                @if(count($errors)>0)
                    <div class="alert alert-link">
                        <div class="text-danger">
                            {{$errors->first('email')}}
                        </div>
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>
