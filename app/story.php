<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class story extends Model
{
    protected $fillable=['donorName','dateOfDonation','hospitalName','message'];
}
