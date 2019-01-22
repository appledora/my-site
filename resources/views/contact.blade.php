@extends('layout')
@section('title-tab')
    <title>Contacts</title>
@endsection

@section('content')
    <h1>My Contacts</h1>
    @foreach($projects as $proj)
        <li>{{ $proj -> title }}</li>
    @endforeach

@endsection