<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Jurusan extends Model
{
    use HasRoles, HasFactory, SoftDeletes;

    protected $table = 'jurusans';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama_jurusan'];

    public function kelas(): HasMany
    {
        return $this->hasMany(Kelas::class);
    }

    
}
