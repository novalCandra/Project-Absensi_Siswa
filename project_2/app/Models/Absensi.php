<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Absensi extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $table = 'absensis';
    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'id',
        'siswa_id',
        'jurnal_id',
        'status',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function jurnal()
    {
        return $this->belongsTo(Jurnal::class);
    }
}
