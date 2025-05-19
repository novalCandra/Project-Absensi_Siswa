<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Siswa extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $table = 'siswas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'kelas_id',
        'nama_siswa'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
