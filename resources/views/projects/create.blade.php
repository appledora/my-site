@extends ('layout')
@section('title-tab')
    <title class="title">Create Projects</title>
@endsection

@section('content')

<form  method="post"  action="/projects">
    {{ csrf_field() }}
    <fieldset>
        <legend>Create New Post</legend>
    <div>
        <input type = "text" name="title" placeholder="project title">
    </div>
    <div>
        <textarea name="Description" placeholder="project Desc"> </textarea>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
    </fieldset>
</body>
</html>