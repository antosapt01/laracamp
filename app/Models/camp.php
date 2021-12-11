<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\checkout;

class camp extends Model
{
    use HasFactory;

    public $fillable = [
        'title', 'slug','tag', 'price'
    ];

    public function camp_benefits(){
        return $this->hasMany(camp_benefit::class);
    }

    public function getregisterAttribute(){
        if(!Auth::check()){
            return false;
        }
        return checkout::where('camp_id', $this->id)->whereUserId(Auth::id())->exists();
    }
}
