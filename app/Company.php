<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_name','location','user_id'
    ];

    public function users()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function branches()
    {
        return $this->hasMany('App\User','id');
    }
}
