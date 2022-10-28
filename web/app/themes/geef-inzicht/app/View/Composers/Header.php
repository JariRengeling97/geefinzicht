<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.header'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'logo' => $this->logo(),
        ];
    }


    /**
     * Logo
     */
    public function logo() {
        $logo = get_field('logo', 'option');
        return $logo;
    }
}
