@extends('layouts.master')


@section('content')

<h1>Posts Index</h1>
<ul>

@foreach ($posts as $post)


<li>{{ $post->title }}  And The Creator is ({{$post->user->name}})</li>


@endforeach


</ul>

@endsection