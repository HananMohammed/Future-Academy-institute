<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Course extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['title', 'text', 'teaching_staff_en', 'teaching_staff_ar', 'time', 'image', 'created_by'];

    public $translatable = ['title', 'text'];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
