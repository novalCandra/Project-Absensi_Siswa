<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Kelas extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $table = 'kelas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'jurusan_id',
        'jenjang_id',
        'nama_kelas',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }
}
