<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_provinsi extends Model
{
    use HasFactory;

    protected $primaryKey = 'provinsi_id';

    protected $guarded = [];

    public function M_kabupaten()
    {
        return $this->hasMany(M_kabupaten::class, 'provinsi_id');
    }
}

