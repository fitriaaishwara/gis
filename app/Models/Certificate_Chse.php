<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate_Chse extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "certificate_chse";
    protected $primaryKey = "id";
    protected $fillable = [
        'business_name',
        'business_address',
        'company_name',
        'agreement_number',
        'certificate_status',
        'first_surveillance',
        'first_surveillance',
        'certificate_date',
        'issue_date',
        'expired_date',
        'note',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
