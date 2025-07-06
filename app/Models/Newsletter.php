<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Newsletter extends Model
{
    protected $fillable = [
        'email',
        'subscribed_at',
        'unsubscribed_at',
        'is_active',
        'subscription_token',
    ];

    protected $casts = [
        'subscribed_at' => 'datetime',
        'unsubscribed_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($newsletter) {
            if (empty($newsletter->subscription_token)) {
                $newsletter->subscription_token = Str::random(32);
            }
            if (empty($newsletter->subscribed_at)) {
                $newsletter->subscribed_at = now();
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->whereNull('unsubscribed_at');
    }

    public function unsubscribe()
    {
        $this->update([
            'is_active' => false,
            'unsubscribed_at' => now(),
        ]);
    }

    public function resubscribe()
    {
        $this->update([
            'is_active' => true,
            'unsubscribed_at' => null,
            'subscribed_at' => now(),
        ]);
    }
}
