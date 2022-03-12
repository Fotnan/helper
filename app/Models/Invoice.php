<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $fillable = [
        'object',
        'name',
        'adress',
        'make_at',
        'paid_at',
        'amount',
        'paid',
        'debt',];
    public $timestamps=null;
}
