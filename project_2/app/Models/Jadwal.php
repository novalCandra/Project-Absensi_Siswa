<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Jadwal extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $table = 'jadwals';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'kelas_id',
        'mapel_id',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
