<?php

namespace App\Models;

use App\Models\Ward;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = "districts";
    protected $primaryKey = 'id';

    /**
     * Relationship
     */
    public function wards()
    {
        return $this->hasMany(Ward::class,'districtID');//->with('blocks');
    }
}
