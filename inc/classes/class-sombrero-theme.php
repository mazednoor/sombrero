<?php
/*
*Classes for the Theme
*
*@package Sombrero
*/

namespace SOMBRERO_THEME\Inc;

use SOMBRERO_THEME\Inc\Traits\Singleton;

class SOMBRERO_THEME
{
    use Singleton;

    protected function __construct()
    {
        //load class.

        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // Actions.

    }
}
