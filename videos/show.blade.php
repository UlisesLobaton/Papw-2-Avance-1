@extends('layouts.app')

@section('title', 'Video')

@section('content')
    <video width="400" controls>
        <source src="/videos/{{$video->route}}" type="video/mp4">
        <source src="" type="video/ogg">
        Your browser does not support HTML5 video.
    </video>
    <comment-list-component></comment-list-component>
@endsection
