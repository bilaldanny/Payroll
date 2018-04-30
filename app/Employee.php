<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
            'company_id','branch_id','first_name','middle_name','last_name','dob','phone','address','hiring_date','location_id','department_id','religion','leaving_date','status','created_by','updated_by'
        ];


    public function companies()
    {
    	return $this->belongsTo(Company::class,'company_id');
    }

    public function branches()
    {
    	return $this->belongsTo(Branch::class,'branch_id');
    }

    public function locations()
    {
    	return $this->belongsTo(Location::class,'location_id');
    }

    public function departments()
    {
    	return $this->belongsTo(Department::class,'department_id');
    }

}
