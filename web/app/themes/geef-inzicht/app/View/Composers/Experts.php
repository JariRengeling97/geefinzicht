<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class Experts extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'recent_experts' => $this->get_recent_experts(),
            'experts' => $this->get_experts(),
        ];
    }

    public function get_recent_experts() {
        $data = array();

        $args = array(  
            'post_type' => 'expert',
            'post_status' => 'publish',
            'posts_per_page' => 3, 
            'orderby' => 'date', 
            'order' => 'DESC', 
        );

        $experts = new WP_Query( $args );
        $experts = $experts->get_posts();

        foreach($experts as $expert) {
            array_push($data, $expert);
        }

        return $data;
    }

    public function get_experts() {
        $data = array();

        $args = array(  
            'post_type' => 'expert',
            'post_status' => 'publish',
            'posts_per_page' => -1, 
            'orderby' => 'date', 
            'order' => 'DESC',
        );

        $experts = new WP_Query( $args );
        $experts = $experts->get_posts();

        foreach($experts as $expert) {
            array_push($data, $expert);
        }

        return $data;
    }
}
