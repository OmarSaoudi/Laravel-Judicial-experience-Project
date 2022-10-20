<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judicial extends Model
{
    use HasFactory;

    protected $table = 'judicials';
    protected $fillable = [
        'name',
        'statement',
        'council_or_court',
        'case_number',
        'index_number',
        'session_day',
        'room',
        'investigation_number',
        'prosecution_number',
        'deposit_date',
        'deposit_number',
        'advance_amount',
        'amount_invoice',
        'estimated_amount',
        'note',
    ];
}
