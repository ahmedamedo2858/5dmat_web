@extends('backeend.layout.app')
@section('title')
لوحة    تحكم فديوهات
@endsection
@section('content')
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name </th>
            <th scope="col">category </th>
            <th scope="col">user </th>
            <th scope="col">published </th>
            <th scope="col">cotrol</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($rows as $row)
            {{$rows}}
            <th scope="row">{{$row->id}}</th>
            <td>{{$row->name}}</td>
            <td>{{$row->cat->name}}</td>
            <td>{{$row->user->name}}</td>
            <td>
                @if($row->published==1)
                    published
                @else
                    hidden
               @endif
            </td>


            <td>
                <a href="{{route('video.edit',$row->id)}}" class="btn btn-success"><i class="material-icons">edit</i></a>
                <a href="{{route('videos.delete',$row->id)}}" class="btn btn-danger"><i class="material-icons">close</i></a>
            </td>
        </tr>
@endforeach
        </tbody>
    </table>
@endsection
