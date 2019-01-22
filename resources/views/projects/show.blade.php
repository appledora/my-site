@extends('layout')
@section('title-tab')
    <title>{{ $project -> title }}</title>
@endsection
@section('content')
    <p class="title">{{ $project -> title }}</p>
    <p class="alert-info">{{ $project -> Description }}</p>
    <p>
        <a href="/projects/{{ $project ->id }}/edit">Edit</a>
    </p>
    @if($project ->tasks->count())
        <div class="box">
            @foreach ($project ->tasks as $task)
            <div>
                <form method="post" action="/tasks/{{$task ->id}}">
                    @method('PATCH')
                    @csrf
                    <label class="checkbox" for="completed">
                          <input  type="checkbox" name = 'completed' onChange="this.form.submit()" {{$task -> completed ? 'checked' : ''}}>
                        {{$task -> description }}

                    </label>

                </form>
            </div>

            @endforeach
        </div>
    @endif

    <form method="post" action="/projects/{{$project -> id}}/tasks" class="card">
        @csrf

        <div class="field">
            <label class="label" for="description"> New Task </label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="New Task">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link"> NEW TASK</button>
            </div>
        </div>

    </form>

@endsection