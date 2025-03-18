<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = 'facilities'; // 연결할 테이블 이름
    protected $primaryKey = 'feature_id'; // 기본 키 설정
    public $incrementing = false; // 기본 키가 자동 증가가 아니라면 false
    protected $keyType = 'string'; // 기본 키가 문자열일 경우 설정
    protected $fillable = [
        'type',
        'geometry_type',
        'longitude',
        'latitude',
        'fac_nam',
        'fac_tel',
        'cat_nam',
        'fac_o_add',
        'fac_n_add',
        'feature_id'
    ];

    protected $casts = [
        'longitude' => 'float',
        'latitude' => 'float'
    ];
}
