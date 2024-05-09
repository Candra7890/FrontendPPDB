<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_desa extends Model
{
    use HasFactory;

    protected $primaryKey = 'desa_id';

    protected $guarded = [];

    public function M_kecamatan()
    {
        return $this->belongsTo(M_kecamatan::class, 'kecamatan_id', 'kecamatan_id');
    }

    public function M_banjar()
    {
        return $this->hasMany(M_banjar::class, 'desa_id', 'desa_id');
    }
}
