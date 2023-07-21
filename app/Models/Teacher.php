<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use HasTranslations;
    public $translatable = ['Name'];
    protected $guarded = [];

    public function specializations()
    {
        return $this->belongsTo(Specialization::class, 'Specialization_id');
    }


    public function genders()
    {
        return $this->belongsTo(Gender::class, 'Gender_id');
    }

    public function Sections()
    {
        return $this->belongsToMany(Section::class, 'teacher_section');
    }
}
