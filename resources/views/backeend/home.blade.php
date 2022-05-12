@extends('backeend.layout.app')
@section('title')
    home page
@endsection
@section('content')
    @include('front-end.charts.charts')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons dp48">chat</i>
                    </div>
                    <p class="card-category">comments</p>
                    <h3 class="card-title">{{$comment_count}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">

                        <a  href="{{route('videos')}}">check comment</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons dp48">video_call</i>
                    </div>
                    <p class="card-category">videos</p>
                    <h3 class="card-title">{{$video_count}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a  href="{{route('videos')}}">check videos</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">skills</p>
                    <h3 class="card-title">{{$skills_count}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a  href="{{route('skills')}}">check videos</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons dp48">queue</i>
                    </div>
                    <p class="card-category">tags</p>
                    <h3 class="card-title">{{$tags_count}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="{{route('tags')}}">check videos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name </th>
                    <th scope="col">Video</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Date</th>
                    <th scope="col">Cotrol</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as$comment)
                <tr>
                    <th scope="row">{{$comment->id}}</th>
                    <td><a style="color: #fff;" href="{{route('users.edit',['id'=>$comment->user->id])}}">{{$comment->user->name}}</a> </td>
                    <td><a  style="color: #fff;" href="{{route('video.edit',['id'=>$comment->video->id])}}">{{$comment->video->name}}</a></td>
                    <td>{{$comment->comment}}</td>
                    <td>{{$comment->created_at}}</td>

                    <td>
                        <a href="{{route('comment.delete',['id'=>$comment->id])}}" title="delete" class="btn btn-danger"><i class="material-icons">close</i></a>
                    </td>
                </tr>
@endforeach
                </tbody>
            </table>
            {{$comments->links()}}
        </div>

    </div>
@endsection
