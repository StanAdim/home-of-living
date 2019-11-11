<div class="accordion" id="accordionExample">
@foreach($posts as $post)

        <div class="card ">
            <div class="card-header" id="post-title">
                <span class="mb-0">
                  {{strtoupper($post->title)}}
                </span>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="post{{$post->id}}" data-parent="#accordionExample">
                <div class="card-body commentCollapse">
                   {{$post->post}}
                   <br>
                   <hr>
                   <div class="lead">Category:
                     <span class="text-danger">#{{$post->category}}</span>
                       <br>
                     Created on:<small class="text-danger">{{$post->created_at}}</small>
                   </div> 

                   <div class="float-right text-muted">

                        By  *{{$post->email}}
                   </div>
                </div>

            </div>
        </div>


    @endforeach

</div>
