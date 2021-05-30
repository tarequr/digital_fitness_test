<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function businessType(){
    	return $this->belongsTo(BusinessType::class,'businessTypeId','id');
    }

    public function section(){
    	return $this->belongsTo(Section::class,'sectionId','id');
    }
}
