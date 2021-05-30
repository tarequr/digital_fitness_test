<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function businessType(){
    	return $this->belongsTo(BusinessType::class,'businessTypeId','id');
    }
}
