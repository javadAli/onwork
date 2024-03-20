<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    use HasFactory;
    protected $table="works";
    protected $fillable=["name","addres"];
    protected $primaryKey="id";
    public function works(){
        return $this->hasMany(workers::class);
    }
}