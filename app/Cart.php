<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\cartsDetail;
class Cart extends Model
{
    //
    public function details()
    {
        return $this->hasMany(CartDetail::class);
    }
}
