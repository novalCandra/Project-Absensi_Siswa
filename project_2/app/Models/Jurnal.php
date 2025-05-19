<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Jurnal extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $table = 'jurnals';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'mapel_id',
        'kelas_id',
        'catatan',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
