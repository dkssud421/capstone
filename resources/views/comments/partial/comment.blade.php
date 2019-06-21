


<div class="media item__comment{{ $isReply ? 'sub': 'top' }}" data-id="{{$comment->id}}" id="comment_{{$comment->id}}">

    <div class=" w3-container w3-card w3-white w3-round w3-margin ">
        <h4>작성자 : {{ $comment->user->name }}</h4><br>
           <p> 내용 : {{ $comment->content}}</p>
        <hr class="w3-clear">
        <small>
        <p>{{ $comment->created_at->diffForHumans() }}</p>
        </small>

    </div>


    @forelse($comment->replies as $reply)

        @include('comments.partial.comment',[
        'comment'=>$reply,
        'isReply' => true,
        ])


    @empty
    @endforelse

</div>
