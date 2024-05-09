<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_banjar extends Model
{
    use HasFactory;

    protected $primaryKey = 'banjar_id';

    protected $guarded = [];

    public function M_desa()
    {
        return $this->belongsTo(M_desa::class, 'desa_id', 'desa_id');
    }
}
