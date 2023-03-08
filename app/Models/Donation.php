<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donation extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const CURRENCY_SELECT = [
        'KSH' => 'KSH',
        'USD' => 'USD',
    ];

    public const STATUS_SELECT = [
        'paid'   => 'paid',
        'unpaid' => 'unpaid',
    ];

    public $table = 'donations';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'donor_id',
        'currency',
        'amount',
        'campaign_id',
        'status',
        'type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function donationTransactions()
    {
        return $this->hasMany(Transaction::class, 'donation_id', 'id');
    }

    public function donor()
    {
        return $this->belongsTo(CrmCustomer::class, 'donor_id');
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
