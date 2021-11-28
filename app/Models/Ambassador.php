<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ambassador extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;

    public $table = 'ambassadors';

    public $orderable = [
        'id',
        'user.email',
        'verified_at.email_verified_at',
        'invested.real_money',
    ];

    public $filterable = [
        'id',
        'user.email',
        'verified_at.email_verified_at',
        'invested.real_money',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'verified_at_id',
        'invested_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function verifiedAt()
    {
        return $this->belongsTo(User::class);
    }

    public function invested()
    {
        return $this->belongsTo(Wallet::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
