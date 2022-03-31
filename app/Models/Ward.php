<?php

namespace App\Models;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    
    protected $table = "wards";
    protected $primaryKey = "id";

    protected $fillable = [
        'districtID',
        'name',
    ];

    /**
     * Relationship
     */
    public function blocks()
    {
        return $this->hasMany(Block::class,'wardID');
    }

    public function districts(){
        return $this->belongsTo(District::class,'id');
    }
}
