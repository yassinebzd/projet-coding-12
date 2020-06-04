@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp ">
    <div class="text-center ">

        <h1 class="text-dark ">Edit About: </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')

     
<div class="container d-flex justify-content-center">
    <div class="col-5">
        <div class="container">
            <form action="/aboutedit/{{$abouts->id}}/update" method="post">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="" class="mt-5">Date</label>
            <input type="text" name="date_about" id="" class="form-control" value="{{$abouts->date_about}}">
            </div>
          
            <div class="form-group">
                <label for="" class="mt-5">Titre</label>
            <input type="text" name="titre_about" id="" class="form-control" value="{{$abouts->titre_about}}"">
            </div>
            <div class="form-group">
                <label for="" class="mt-5">Description Article</label>
            <input type="text" name="desc_about" id="" class="form-control" value="{{$abouts->desc_about}}"">
            </div>
            <div class="form-group">
                <label for="" class="mt-5">Image</label>
            <input type="text" name="img_about" id="" class="form-control" value="{{$abouts->img_about}}"">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
            </form>
        </div>

    </div>

</div>
        <!-- /. ROW  -->
    
        <!-- /. ROW  -->
    </div>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/users.css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">

@stop

@section('js')
   
@stop