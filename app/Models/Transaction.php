<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        "category_id",
        "transaction_date",
        "amount",
        "description",
    ];


    protected $dates = ['transaction_date'];

    protected $casts = [
        'transaction_date' => 'date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setTransactionDateAttribute($value)
    {
        $this->attributes['transaction_date'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }
}
