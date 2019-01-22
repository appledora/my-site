@extends ('layout')
@section('title-tab')
    <title class="title">Edit Tab</title>
@endsection

@section('content')
    <h1 class="title">Edit project</h1>
<form method="post" action="/projects/{{$project ->id}}" >
    {{method_field('PATCH')}}
    {{ csrf_field() }}
    <div class="field">
        <label class="label" for="title">Title</label>

        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title" value="{{$project -> title}}">
        </div>
    </div>

    <div class="field">
        <label class = "label" for="Description">Description</label>
        <div class="control">
            <textarea name="Description" class="textarea">{{$project -> Description}}</textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Update</button>
        </div>
    </div>
<form method="post" action="/projects/{{$project -> id}}">
   @method('DELETE')
    @csrf
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Delete</button>
        </div>
    </div>
</form>
</form>
    @endsection