@extends('layouts.app')

@section('content')
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">{{$post->post_title}}</h1>

        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <p class="lead mb-0">{{$post->post_description}}</p>

        </div>
    </div>
</div>

@endsection()
