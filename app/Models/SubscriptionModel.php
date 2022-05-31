<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionModel extends Model {

    public $table = 'subscribed_emails';

    protected $connection = 'mysql';

    public $fillable = ['email'];

}
