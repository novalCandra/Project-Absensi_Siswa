<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Jenjang extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $table = 'jenjangs';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama_jenjang'];
}
