<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeUnit\FunctionUnit;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Timetable extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function class()
    {
        return $this->belongsTo(SchoolClass::class, 'school_class_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
