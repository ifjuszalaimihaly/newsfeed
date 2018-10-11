@extends('layouts.master')
@section('title')
    Hírek
@endsection
@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

                <h1 class="my-4">Hírek</h1>

                <!-- Blog Post -->
                @foreach($news as $newsItem)
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-2">
                                    <img class="img-thumbnail"
                                         src="{{URL::to('public/images/'.$newsItem->thumbnail)}}"
                                    >
                                </div>
                                <div class="col-10">
                                    <h2 class="card-title">{{$newsItem->title}}</h2>
                                    <p class="card-text">{{$newsItem->description}}</p>
                                    <a href="#" class="btn btn-primary">Tovább &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        {{$newsItem->created_at}}
                    </div>
                </div>
                @endforeach

                <!-- Pagination -->
                {{ $news->links() }}

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection