<form action="{{route('comment.store')}}" method="post">
   @csrf
    @include('backeend.comments.form')
    <input name="video_id" type="hidden" value="{{$row->id}}"/>
    <button type="submit" class="btn btn-primary">أضف </button>
</form>
