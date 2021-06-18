<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question(){
    	return $this->belongsTo(Question::class,'question_id','id');
    }

    public function section(){
    	return $this->belongsTo(Section::class);
    }
}
