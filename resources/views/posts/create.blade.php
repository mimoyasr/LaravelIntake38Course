@extends('layouts.master')


@section('content')

<form method="post" action="/posts">
{{csrf_field()}}
Title :- <input type="text" name="title">
<br><br>
Description :- 
<textarea name="description"></textarea>
<br>

<input type="submit" value="Submit" class="btn btn-primary">
</form>

@endsection