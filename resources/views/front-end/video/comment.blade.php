<div class="row">
    <div class="col-md-8">
        <p>
            <span>  <i class="nc-icon nc-user-run btn btn-info"></i>
                <a href="{{route('front.profilee',['id'=>$comment->user->id,slug($comment->user->name)])}}">{{$comment->user->name}}</a>
            </span>
        </p>

    </div>
    <div class="col-md-4">
        <p>
            <span><i class="nc-icon nc-calendar-60 btn btn-danger"></i>{{$comment->created_at}}</span>

        </p>
    </div>

</div>

<p>
    <span><i class="nc-icon nc-chat-33 btn btn-primary"></i>{{$comment->comment}}</span>

</p>


@if(auth()->user())
    @if(auth()->user()->group=='admin'||auth()->user()->id==$comment->user->id)
        <a class="btn btn-outline-info btn-round text-right" href="" onclick="$(this).next('div').slideToggle(1000);return false;">edit</a>
    @endif
@endif
<div style="display: none;">
    <form action="{{route('front.comment',['id'=>$comment->id])}}"method="post">
        @csrf

        <div class="form-group">
            <textarea class="form-control" name="comment"   rows="4">{{$comment->comment}}</textarea>
        </div>
        <button class="btn btn-outline-danger btn-round" type="submit">تعديل</button>
    </form>
</div>

@if(!$loop->last)
    <hr>
@endif
