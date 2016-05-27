<?php

namespace Mrzeta\Admin\Composers;

use Mrzeta\Admin\Entities\Permission;

class RoleFormComposer
{
    public function compose($view)
    {
        $permissions = Permission::lists('name', 'id');

        $view->with(compact('permissions'));
    }
}
