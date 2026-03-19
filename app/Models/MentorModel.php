<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorModel extends Model
{
    /** @use HasFactory<\Database\Factories\MentorModelFactory> */
    use HasFactory;

    public function siswa()
    {
        return $this->hasMany(SiswaModel::class);
    }
}
