<?php

namespace App\Models;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Concerns\Grid;

class Phone extends Model {

    use UsesUuid,
        SoftDeletes,
        Grid;

    public $incrementing = false;
    public $timestamps = true;
    protected $table = 'phones';
    protected $fillable = [
        'id',
        'country',
        'status',
        'country_code',
        'phone_num',
        ];

}
