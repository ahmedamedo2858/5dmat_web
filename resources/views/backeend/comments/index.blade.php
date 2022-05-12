
<table class="table table-striped table-dark" id="comments">
    <thead>

    <tbody>
    <tr>
        @foreach($comments as $comment)


            <td><small>{{$comment->user->name}}</small>
                <p>{{$comment->comment}}</p>
                <small>{{$comment->created_at}}</small></td>


            <td>
                <button  onclick="$(this).closest('tr').next('tr').slideToggle()" class="btn btn-success"><i class="material-icons">edit</i></button>
                <a href="{{route('comment.delete',$comment->id)}}" class="btn btn-danger"><i class="material-icons">close</i></a>
            </td>
    </tr>
    <tr style="display: none;">

        <td colspan="4"><form action="{{route('comment.update',$comment->id)}}" method="post">
                @csrf
                @include('backeend.comments.form',['row'=>$comment])

                <button type="submit" class="btn btn-primary">تحديث </button>
            </form></td>
    </tr>
    @endforeach
    </tbody>
</table>
