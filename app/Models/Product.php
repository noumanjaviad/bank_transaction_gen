<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false; // Disable automatic timestamps

    protected $fillable = [
        'productid',
        'name',
        'companyid', // foreign key
        'account_number',
        'iban',
        'type',
        'contact',
        'fax',
        'address',
        'balance',
        'date',
    ];
    protected $primaryKey = 'productid';

    protected $table = "product";

    public function company()
    {
        return $this->belongsTo(Company::class, 'companyid', 'companyid');
    }

     // Relationship to Transactions
     public function transactions()
     {
         return $this->hasMany(Transaction::class, 'productid', 'productid');
     }
}
