@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nazwa</th>
            <th>email</th>
            <th>Edycja</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users ?? [] as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td></td>
            </tr>
        @endForeach;
    </tbody>
</table>
{{ $users->links() }}




@endsection

