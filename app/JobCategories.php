<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategories extends Model
{


    use HasFactory;
    protected $table = 'categories';
    protected $guarded = ['id'];
    
    public function job_list(){

        return $this->hasMany('App\Job', 'job_category_id', 'id');

    }
}
