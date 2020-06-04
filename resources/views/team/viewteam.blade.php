@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp m">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3  ">TEAM</h1>
 
        <hr class="bg-dark">
    </div>
</div>
@stop
@section('content')
    <div class="container">
        
        <table class="table table-striped">
            <thead>
              <tr  class="row bg-dark text-white">
                <th class="text-center col">Id</th>
                <th class="text-center col">Description</th>
                <th class="text-center col">image</th>
          

                <th class="text-center col">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr class="row">
                        <td class="text-center col">{{$team->id}}</td>
                        <td class="text-center col">{{$team->img_name}}</td>
                        <td class="text-center col">{{$team->img_desc}}</td>
                        <td class="text-center col"><img src="{{asset('storage/'.$team->img_path)}}" alt="" style="width: 50px" ></td>
                        <td class="text-center col d-flex justify-content-center align-items-center">
                            <a href="{{route('team.edit',$team)}}" class="btn btn-outline-warning mx-2">editer</a>
                            <form action="{{route('team.destroy',$team)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-outline-danger mx-2">Supprimer</button>
                            </form>
                        </td>

                        <td>


                            <!-- Button trigger modal -->
                            <form action="{{route('team.destroy',$team)}}" method="post">
                                @csrf
                                @method('DELETE')
                               
                        
  

                            </form>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
          </table>  
@stop
@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection