<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_kecamatan extends Model
{
    use HasFactory;

    protected $primaryKey = 'kecamatan_id';

    protected $guarded = [];

    public function M_kabupaten()
    {
        return $this->belongsTo(M_Kabupaten::class, 'kabupaten_id', 'kabupaten_id');
    }

    public function M_desa()
    {
        return $this->hasMany(M_desa::class, 'kecamatan_id', 'kecamatan_id');
    }
}
