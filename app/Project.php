<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $guarded = [];

  public function tasks(){
      return $this->hasMany(Task::class);
  }

  public function addTask($task){
      return $this -> tasks() ->create($task);
  }

  public function owner(){
      return $this -> belongsTo(User::class);
  }
}
