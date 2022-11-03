<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    public $table = 'information';
    public $fillable = ['first_name', 'middle_name', 'last_name', 'position'];
    public $guarded;

    //All DB related logics
    public function getInformation()
    {
        $query = Information::get();
        return $query;
    }

    public function getInformationForUpdate()
    {
        
    }
}
