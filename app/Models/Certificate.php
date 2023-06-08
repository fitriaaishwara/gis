<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "certificate";
    protected $primaryKey = "id";
    protected $fillable = [
        'participant_name',
        'company_name',
        'training_theme',
        'training_address',
        'certificate_number',
        'certificate_date',
        'expired_date',
    ];
};
