<form action="{{route('forum.post')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="email">Your E-mail</label>
        <input type="text" name="email" readonly class="form-control-plaintext" id="email" value="{{auth()->user()->email}}">
        @if(count($errors)>0)

            <div class="alert alert-link">
                <div class="text-danger">
                    {{$errors->first('email')}}
                </div>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" id="title" name="title" placeholder="Head of your post..." value="{{old('title')}}">
        @if(count($errors)>0)

            <div class="alert alert-link">
                <div class="text-danger">
                    {{$errors->first('title')}}
                </div>
            </div>
        @endif
    </div>


    <div class="form-group">
        <label for="category">Category</label>
          <select class="custom-select form-control" name="category" id="category">
            <option  class="disabled">--Choose the Category--</option>
            <option value="Business">Business</option>
            <option value="Leadership">Leadership</option>
            <option value="Agriculture">Agriculture</option>
            <option value="Environment">Environment</option>
            <option value="Culture">Culture</option>
          </select>
        @if(count($errors)>0)

            <div class="alert alert-link">
                <div class="text-danger">
                    {{$errors->first('category')}}
                </div>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="post">Body</label>
        <textarea class="form-control" id="post" name="post" rows="3" placeholder="Type something here...">{{old('post')}}</textarea>
        @if(count($errors)>0)

            <div class="alert alert-link">
                <div class="text-danger">
                    {{$errors->first('post')}}
                </div>
            </div>
        @endif
    </div>
    <button type="submit" class="justify-content-center mt-1 btn-block btn btn-primary">Share</button>
</form>
