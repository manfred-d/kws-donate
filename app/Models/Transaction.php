<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'transactions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'donation_id',
        'ref',
        'status',
        'amount',
        'channel',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function donation()
    {
        return $this->belongsTo(Donation::class, 'donation_id');
    }
    public function donor()
    {
        return $this->belongsTo(CrmCustomer::class, 'donor_id');
    }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
