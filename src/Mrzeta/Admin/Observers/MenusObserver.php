<?php

namespace Mrzeta\Admin\Observers;

class MenusObserver
{
    /**
     * Handle the specified event.
     */
    public function handle()
    {
        require __DIR__.'/../menus.php';
    }
}
