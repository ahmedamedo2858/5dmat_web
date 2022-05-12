<a href="{{route('front.video',['id'=>$video->id])}}" title="{{$video->name}}">  <div class="card" style="width: 20rem;">
    <img class="card-img-top" src="{{url('upload/',$video->image)}}" alt="{{$video->name}}" style="max-width: 162px;margin-top: 100px">
    <div class="card-body">

        <p class="card-text">{{$video->name}}</p>
        <small>{{$video->created_at}}</small>
    </div>
</div>
</a>
