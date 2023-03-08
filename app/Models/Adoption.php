<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adoption extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'adoptions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'adpotee_id',
        'transaction_id',
        'animal_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function adpotee()
    {
        return $this->belongsTo(CrmCustomer::class, 'adpotee_id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }

    public function animal()
    {
        return $this->belongsTo(ProductCategory::class, 'animal_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
