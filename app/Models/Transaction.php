<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;


    protected $fillable = [
        'transactionid',
        'credit',
        'debit',
        'productid', //foreign key of product table
        'description',
        'transactiontype_id', //foreign key of transactiontype table
        'balance',
        'date',
        'vdate',
        'reference'
    ];
    protected $primaryKey = 'transactionid';

    protected $table = 'transaction';
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class, 'productid', 'productid');
    }


    public function transaction_type()
    {
        return $this->belongsTo(TransactionType::class, 'transactiontype_id', 'transactionid');
    }
}
