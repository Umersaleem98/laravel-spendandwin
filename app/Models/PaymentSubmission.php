<?php

namespace App\Models;

use App\Models\Winner;
use Illuminate\Database\Eloquent\Model;

class PaymentSubmission extends Model
{
    
    protected $table = 'payment_submissions';

    protected $fillable = ['name', 'email', 'phone', 'payment_screenshot'];

    public function winner()
    {
        return $this->hasOne(Winner::class);
    }
}
