<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function dailyStatuses(){
        return $this-> hasMany(DailyStatus::class);
    }
    public static function students(){

        return static::orderBy('id', 'asc')->get();
    }
}
