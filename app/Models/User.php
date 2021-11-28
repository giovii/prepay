<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Hash;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Translation\HasLocalePreference;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements HasLocalePreference
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Notifiable;

    public const USER_TYPE_SELECT = [
        'vip'    => 'vip',
        'medium' => 'medium',
        'basic'  => 'basic',
    ];

    public const INVESTOR_TYPE_SELECT = [
        'private'      => 'Private',
        'professional' => 'Professional',
        'proposer'     => 'Proposer',
    ];

    public $table = 'users';

    public $orderable = [
        'id',
        'email',
        'phone_number',
        'investor_type',
        'refcode',
        'city',
        'vat',
        'user_type',
    ];

    public $filterable = [
        'id',
        'email',
        'roles.title',
        'phone_number',
        'investor_type',
        'refcode',
        'city',
        'vat',
        'user_type',
    ];

    protected $hidden = [
        'remember_token',
        'password',
    ];

    protected $dates = [
        'email_verified_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'referrer_id',
        'name',
        'surname',
        'email',
        'password',
        'locale',
        'phone_number',
        'investor_type',
        'refcode',
        'address',
        'city',
        'zip_code',
        'vat',
        'user_type',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    #protected $appends = ['referral_link'];

    /**
     * Get the user's referral link.
     *
     * @return string
     */
    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->refcode]);
    }

    /**
     * A user has a referrer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    /**
     * A user has many referrals.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('title', 'Admin')->exists();
    }

    public function scopeAdmins()
    {
        return $this->whereHas('roles', fn ($q) => $q->where('title', 'Admin'));
    }

    public function preferredLocale()
    {
        return $this->locale;
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = Hash::needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getInvestorTypeLabelAttribute($value)
    {
        return static::INVESTOR_TYPE_SELECT[$this->investor_type] ?? null;
    }

    public function getUserTypeLabelAttribute($value)
    {
        return static::USER_TYPE_SELECT[$this->user_type] ?? null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
