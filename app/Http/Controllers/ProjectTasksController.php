<?php

namespace App\Http\Controllers;

use App\Project;
use App\task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    //
    public function update(task $task){
        #dd($task);
        #dd(request() -> all());

        $task ->update([
           'completed' => request() ->has('completed')
        ]);

        /*an alternate to above codeblock
         * $method = request() ->has('completed') ? 'complete' : 'incomplete'
         * $task -> $method()
         * */
        return back();
    }

    public function store(Project $project){
        #dd("new task");
        Task::create([
           'project_id' => $project ->id,
            'description' => request('description')
        ]);
        return back();
    }

}
