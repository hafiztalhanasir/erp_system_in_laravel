<?php

namespace App\Models\Roles;

use Spatie\Permission\Models\Role as Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class CustomRole extends Model
{
    use LogsActivity;
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('role')
            ->logOnly(['name'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "This role has been {$eventName}");
    }
}
