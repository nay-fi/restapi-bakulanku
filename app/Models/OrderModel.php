<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function customers()
    {
        return $this->belongsTo(CustomerModel::class);
    }
}
