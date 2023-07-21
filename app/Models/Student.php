<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Student extends Authenticatable
{
    use HasTranslations, SoftDeletes;
    public $translatable = ['name'];
    protected $guarded = [];


    public function gender()
    {
        return $this->belongsTo('App\Models\Gender', 'gender_id');
    }


    public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'Grade_id');
    }


    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom', 'Classroom_id');
    }


    public function section()
    {
        return $this->belongsTo('App\Models\Section', 'section_id');
    }


    public function Nationality()
    {
        return $this->belongsTo('App\Models\Nationalitie', 'nationalitie_id');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }


    public function myparent()
    {
        return $this->belongsTo(My_Parent::class, 'parent_id');
    }

    public function student_account()
    {
        return $this->hasMany(StudentAccount::class, 'student_id');
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'student_id');
    }
}
