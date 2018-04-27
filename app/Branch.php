<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'branch_name','company_id','location'
    ];

    public function companies()
    {
        return $this->belongsTo(Company::class,'company_id');
    }
}
