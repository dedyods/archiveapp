<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Project;
use App\Category;
use App\User;


class Archive extends Model
{
    //
    protected $guarded =[];

    public function getFiles(){
        return asset('/files/'.$this->tipe_file);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
