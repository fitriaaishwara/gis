<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate_Management extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "certificate_management";
    protected $primaryKey = "id";
    protected $fillable = [
        'company_name',
        'company_address',
        'scope',
        'restriction',
        'pic',
        'certificate_status',
        'first_surveillance',
        'first_surveillance',
        'certificated_date',
        'issue_date',
        'note',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
