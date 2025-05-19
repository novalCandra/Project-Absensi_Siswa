<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Mapel extends Model
{
    use HasRoles, SoftDeletes, HasFactory;

    protected $table = 'mapels'; // nama table
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama_mapel',
    ];
}
