<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Qrcode
 * @package App\Models
 * @version June 16, 2018, 5:55 pm UTC
 *
 * @property integer user_id
 * @property string website
 * @property string product_name
 * @property string company_name
 * @property string product_url
 * @property string callback_url
 * @property string qrcode_path
 * @property float amount
 * @property boolean status
 */
class Qrcode extends Model
{
    use SoftDeletes;

    public $table = 'qrcodes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'website',
        'product_name',
        'company_name',
        'product_url',
        'callback_url',
        'qrcode_path',
        'amount',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'website' => 'string',
        'product_name' => 'string',
        'company_name' => 'string',
        'product_url' => 'string',
        'callback_url' => 'string',
        'qrcode_path' => 'string',
        'amount' => 'float',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
