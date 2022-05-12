@extends('backeend.layout.app')
@section('title')
لوحة    تحكم الاقسام
@endsection
@section('content')
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name </th>
            <th scope="col">cotrol</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($rows as $row)
            <th scope="row">{{$row->id}}</th>
            <td>{{$row->name}}</td>

            <td>
                <a href="{{route('page.edit',$row->id)}}" class="btn btn-success"><i class="material-icons">edit</i></a>
                <a href="{{route('pages.delete',$row->id)}}" class="btn btn-danger"><i class="material-icons">close</i></a>
            </td>
        </tr>
@endforeach
        </tbody>
    </table>
@endsection