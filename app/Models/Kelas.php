<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tutor()
    {
        return $this->belongsToMany(User::class, 'kelas_tutor', 'kelas_id', 'tutor_id');
    }
    public function materi()
    {
        return $this->hasMany(Materi::class);
    }
    public function kuis()
    {
        return $this->hasMany(Kuis::class);
    }
}
