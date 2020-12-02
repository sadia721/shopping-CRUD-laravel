@extends('layout')
@section('content')
<div class="container">
        <h1>Admin Panal</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">price</th>
                    <th scope="col">quantity</th>
                    <th scope="col">operations</th>
                </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr>
                    <th scope="row">{{$record->id}}</th>
                    <td>{{$record->name}}</td>
                    <td>{{$record->price}}</td>
                    <td>{{$record->quantity}}</td>
                    <td><a class="btn" href="{{url('Admin/'.$record->id).'/edit'}}" role="button">Edit</a>
                    <a class="btn" href="{{url('Admin/'.$record->id).'/delete'}}" role="button">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>  
        {{$records->links()}}
    </div>
@endsection(content)