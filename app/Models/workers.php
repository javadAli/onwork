<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workers extends Model
{
    use HasFactory;
    protected $table="workers";
    protected $fillable = ["name","workeraddress","workerphone","work_id"];
    protected $primaryKey="id";
    public function workers(){
        return $this->belongsTo("works","work_id","id");
    }
}
