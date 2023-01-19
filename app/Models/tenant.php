<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Constants\MainTableConstans as mtc;

class Tenant extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = mtc::TENANT_TABLE_NAME;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        mtc::TENANT_TABLE_HOSTNAME,
        mtc::TENANT_TABLE_PORT,
        mtc::TENANT_TABLE_DBNAME,
        mtc::TENANT_TABLE_DBUSERNAME,
        mtc::TENANT_TABLE_COMPANY_ID,
        mtc::TENANT_TABLE_DBPASSWORD
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        mtc::TENANT_TABLE_DBPASSWORD
    ];
}
