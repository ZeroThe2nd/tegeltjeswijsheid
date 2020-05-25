<?php namespace App\Models;

use App\Traits\UuidTrait;

use Spatie\Permission\Models\Permission as PermissionBase;

class Permission extends PermissionBase
{
    use UuidTrait;
}