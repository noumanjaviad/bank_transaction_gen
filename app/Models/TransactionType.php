<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    use HasFactory;

    protected $fillable = [
        'transactiontype',
        'name',
        'description'
    ];

    protected $table = 'transactiontype';

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
