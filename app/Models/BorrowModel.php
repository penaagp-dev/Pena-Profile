<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowModel extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'tb_borrow';
    protected $fillable = [
        'id',
        'name_borrow',
        'quantity',
        'description',
         
    ];
}
