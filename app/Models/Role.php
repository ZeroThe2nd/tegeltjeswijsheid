<?php namespace App\Models;

use App\Traits\UuidTrait;

use Spatie\Permission\Models\Role as RoleBase;

class Role extends RoleBase
{
    use UuidTrait;
}