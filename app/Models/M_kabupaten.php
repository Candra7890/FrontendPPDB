<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_kabupaten extends Model
{
    use HasFactory;

    protected $primaryKey = 'kabupaten_id';

    protected $guarded = [];

    public function M_provinsi()
    {
        return $this->belongsTo(M_provinsi::class, 'provinsi_id', 'provinsi_id');
    }

    public function M_kecamatan()
    {
        return $this->hasMany(M_kecamatan::class, 'kabupaten_id', 'kabupaten_id');
    }
}
