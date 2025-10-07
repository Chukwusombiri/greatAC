<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory, HasUuids;

    protected $appends = ['duration_str'];

    public function getDurationStrAttribute()
    {       
        $duration = $this->duration;

        if ($duration < 24) {
            return $duration . ' hour' . ($duration == 1 ? '' : 's');
        }

        $days = floor($duration / 24);
        $remainingHours = $duration % 24;

        $parts = [];
        
        $parts[] = $days . ' day' . ($days == 1 ? '' : 's');       

        if ($remainingHours > 0) {
            $parts[] = $remainingHours . ' hour' . ($remainingHours === 1 ? '' : 's');
        }

        return count($parts)>0 ? implode(', ', $parts) : '0 hours';
    }

    public function deposits()
    {
        return $this->hasMany(\App\Models\Deposit::class, 'plan_id');
    }
}
