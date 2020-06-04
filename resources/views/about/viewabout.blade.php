@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp m">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3  ">  ABOUT EDIT </h1>
        <a href="/aboutedit/create" class="btn btn-warning ">Create</a>
        <hr class="bg-dark">
    </div>
</div>
@stop
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
           
        
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover"
                        id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID:</th>
                                <th>Date</th>
                                <th>Titre:</th>
                                <th>Description:</th>
                                <th>Image:</th>
                                <th>Action:</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($abouts as $about)
                            <tr class="odd gradeX">
                                <td>{{$about->id}}</td>
                                <td class="center">{{$about->date_about}}</td>
                                <td class="center">{{$about->titre_about}}</td>
                                <td class="center">{{$about->desc_about}}</td>
                                <td class="center"><img src="{{$about->img_about}}" alt="" style="width: 50px"></td>
                                 
                                    <td class="text-center col d-flex justify-content-center align-items-center">
                                        <a href="{{route('about.edit',$about)}}" class="btn btn-outline-warning mx-2">editer</a>
                                        <form action="{{route('about.destroy',$about)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type='submit' class="btn btn-outline-danger mx-2">Supprimer</button>
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