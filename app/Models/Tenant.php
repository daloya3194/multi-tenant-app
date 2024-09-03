<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasFactory;

    protected $guarded = [];

    public static function getCustomColumns(): array
    {
        return [
            'id',
            'name',
            'created_at',
            'updated_at',
        ];
    }
}
