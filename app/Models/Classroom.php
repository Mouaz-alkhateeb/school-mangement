<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Classroom extends Model
{
    use HasTranslations;

    protected $table = 'Classrooms';
    protected $fillable = ['Name_Class', 'Grade_id'];
    public $translatable = ['Name_Class'];
    public $timestamps = true;


    public function Grades()
    {
        return $this->belongsTo(Grade::class, 'Grade_id');
    }
}
