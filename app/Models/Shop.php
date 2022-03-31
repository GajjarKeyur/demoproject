<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table="shops";

    protected $primaryKey = "id";

    protected $fillable =[
        'userID',
        'blockID',
        'name'
    ];

    /**
     * Relationship
     */
    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
}
