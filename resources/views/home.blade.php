@extends('layout.app')

@section('content')
<div id="banner"></div>

<div class="main_top">
  <div class="container">
    <div id="title">
      <h3>CURRENT SERIES</h3>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-6 py-5">
        @foreach ($comics as $comic)
        <div class="col">
            <div>
                <img src="{{$comic["thumb"]}}" alt="type">
                <a href="/comic/{{$comic["title"]}}" class="mt-2">{{$comic["title"]}}</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center pb-4">
      <button type="button" class="btn btn-primary">Load More</button>
    </div>
  </div>
</div>
@endsection