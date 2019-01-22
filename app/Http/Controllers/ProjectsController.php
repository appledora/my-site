<?php

namespace App\Http\Controllers;

use App\Mail\ProjectCreated;
use App\Project;
use Illuminate\Support\Facades\Mail;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this ->middleware('auth') ->only('edit','index','create','update','delete');
        #alternate to 'only' we could use 'except' for the opposite result
    }

    public function index()
    {
        $projects = Project::all(); #grab everything from the db
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function update(Project $proj)
    {
        #dd("hello there");
        #dd(request() -> all());
        $proj->title = request('title');
        $proj->Description = request('Description');
        $proj->save();
        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function delete(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $project = Project::create([
            'title' => request('title'),
            'Description' => request('Description'),
             'owner_id' => auth() ->id()
        ]);
/*        $proj = new Project();
        $proj->title = request('title');
        $proj->Description = request('Description');
        $proj->save();*/

        Mail::to($project -> owner ->email) -> send(
          new ProjectCreated($project)
        );
        return redirect('/projects');
        #return request('title') ;
    }
}
