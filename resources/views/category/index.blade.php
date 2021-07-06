@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="align-content-right"><a href="{{route('category.create')}}"><button class="btn btn-outline-success">+ Create New Category</button></a></div><br>
                @if(Session::has('message'))
                    <div class="alert alert-danger">
                        {{Session::get('message')}}
                    </div>
                @endif
                    <div class="card">
                        <div class="card-header">All Category</div>

                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($categories)>0)
                                    @foreach($categories as $key=>$category)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$category->name}}</td>
                                            <td>
                                                <a href="{{route('category.edit',[$category->id])}}"><button class="btn btn-outline-success">Edit</button></a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$category->id}}">
                                                    Delete
                                                </button>
                                                <!-- Modal-->
                                                <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <form action="{{route('category.destroy', [$category->id])}}" method="POST">@csrf
                                                            {{method_field('DELETE')}}
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">{{$category->name}}</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure to Delete? <br> {{$category->name}}
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <td>No Category to display</td>
                                @endif
                                </tbody>
                            </table>


                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
