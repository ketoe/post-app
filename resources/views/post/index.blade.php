@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nazwa</th>
            <th>Treść</th>
            <th>Ilość komentarzy</th>
            <th>Edycja</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts ?? [] as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->comments->count()}}</td>
                <td>
                    <a href="{{ route('posts.view', $post->id) }}" class="btn btn-sm btn-primary">Pokaż komentarze</a>
                </td>
            </tr>
        @endForeach;
    </tbody>
</table>
{{ $posts->links() }}




@endsection

