<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    protected $table = 'cvs';
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'image',
        'skills',
        'languages',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class, 'cv_id');
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class, 'cv_id');
    }

    public function references()
    {
        return $this->hasMany(Reference::class, 'cv_id');
    }
}
