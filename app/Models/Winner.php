<?php

namespace App\Models;

use App\Models\PaymentSubmission;
use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
      protected $table = 'winners';

    protected $fillable = ['payment_submission_id', 'name', 'email'];

    public function paymentSubmission()
    {
        return $this->belongsTo(PaymentSubmission::class);
    }
}
