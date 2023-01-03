<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class Posts extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
        'template-blogs',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'posts' => $this->get_posts(-1),
            'recent_posts' => $this->get_posts(3),
        ];
    }

    public function get_posts($posts_per_page) {
        $data = array();

        $args = array(  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => $posts_per_page, 
            'orderby' => 'title', 
            'order' => 'ASC', 
        );

        $posts = new WP_Query( $args );
        $posts = $posts->get_posts();

        foreach($posts as $post) {
            array_push($data, $post);
        }

        return $data;
    }
}
