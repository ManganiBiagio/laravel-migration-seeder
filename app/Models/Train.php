<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function departureTimeToString(){
        return $this->convertDateFromDb($this->start_at);
        
    }
    public function arrivedTimeToString(){
        return $this->convertDateFromDb($this->arrived_at);
        
    }
    private function convertDateFromDb($toConvert){
        return date("H:i d-m-Y ",strtotime($toConvert));

    }
}
