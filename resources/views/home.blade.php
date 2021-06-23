@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-4">
            <img src="/logo/freecode.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-4">
            <div><h2>Kimgram<h2></div>
            <div class="d-flex">
                <div class="pr-5"> <strong>200 </strong> posts</div>
                <div class="pr-5"><strong>10k </strong>followers</div>
                <div class="pr-5"><strong>150 </strong>following</div>
            </div>
            <div class="pt-4"><strong>Kim.org</strong></div>
            <div>Welcome to my first laravel creation site @KimGram.com</div>
            <div><a href="www.youtube.com">stream</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="/TOYOTA/dusty.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/TOYOTA/kenny.jpg" class="w-100">
        </div>
        <div class="col-2">
            <img src="/TOYOTA/lukasz.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
