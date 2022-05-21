<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phim extends Model
{
    use HasFactory;

    
    protected $table = 'phims';

    protected $fillable = 
    [
        'ten',
        'thoiluong',
        'dien_vien',
        'tom_tat',
        'poster',
        'dao_dien',
        'trailer',
        'ngay_chieu',
        'ngay_ketthuc'
    ];
}
