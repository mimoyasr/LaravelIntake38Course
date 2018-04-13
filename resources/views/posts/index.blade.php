@extends('layouts.master')


@section('content')

<h1>Posts Index</h1>
<ul>

@foreach ($posts as $post)


<li>{{ $post->title }}</li>


@endforeach


</ul>

@endsection