<?php

namespace App\Models\Pertanian;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataLuasPanenTomat
 * @package App\Models\Pertanian
 * @version March 19, 2022, 12:01 am UTC
 *
 * @property string $JenisTanaman
 * @property string $Tahun2017
 * @property string $Tahun2018
 * @property string $Tahun2019
 */
class DataLuasPanenTomat extends Model
{

    use HasFactory;

    public $table = 'data_luas_panen_tomats';
    



    public $fillable = [
        'JenisTanaman',
        'Tahun2017',
        'Tahun2018',
        'Tahun2019'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'JenisTanaman' => 'string',
        'Tahun2017' => 'string',
        'Tahun2018' => 'string',
        'Tahun2019' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'JenisTanaman' => 'required',
        'Tahun2017' => 'required',
        'Tahun2018' => 'required',
        'Tahun2019' => 'required'
    ];

    
}
