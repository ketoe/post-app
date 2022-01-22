@extends('layouts.app')

@section('content')

<ul>
<li>Post: {{$post->title}}</li>
<li>Treść: {{$post->content}}</li>
<li>Autor: {{$post->user->name}}</li>

<li><b>Posty:</b>
    <ul>
        @foreach ($post->comments ?? [] as $comment)
        <li>{{$comment->content}} | {{$comment->user->name}}</li>
        @endforeach
    </ul>
</li>


</ul>

@endsection

