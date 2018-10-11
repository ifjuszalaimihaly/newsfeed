@extends('layouts.master')
@section('title')
    Hírek - {{$newsItem->title}}
@endsection
@section('content')
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8 offset-lg-2">

                <!-- Title -->
                <h1 class="mt-4">{{$newsItem->title}}</h1>

                <hr>

                <!-- Date/Time -->
                <p>{{$newsItem->created_at}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="{{URL::to('public/images/'.$newsItem->image)}}" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">{{$newsItem->description}}</p>

                <hr>

                <p>{{$newsItem->content}}</p>

                <hr>

                <a class="btn btn-primary" href="{{Url::previous()}}">Vissza</a>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection