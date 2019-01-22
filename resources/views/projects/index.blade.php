@extends ('layout')
@section('title-tab')
    <title class="title">Projects</title>
@endsection

@section('content')
    <h1 class="title">Projects : </h1>

<button onclick="window.location.href='/projects/create'">New Post</button>
<ul>
    @foreach( $projects as $proj)
        <li>
            <a href="/projects/{{$proj -> id}}">
                {{ $proj -> title }}
            </a>
        </li>
    @endforeach
</ul>

    @endsection
