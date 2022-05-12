<form style="padding-bottom: 30px;" action="{{route('front.commentstore',['id'=>$videos->id])}}"method="post">
    @csrf

    <div class="form-group">
        <textarea class="form-control" name="comment"   rows="4"></textarea>
    </div>
    <button class="btn btn-outline-primary btn-round" type="submit">اضف تعليق</button>
</form>
