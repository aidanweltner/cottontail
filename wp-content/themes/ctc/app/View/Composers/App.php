<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName'  => $this->siteName(),
            'tagline'   => $this->tagline(),
            'copyright' => $this->copyright(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function tagline()
    {
        $project_tag = get_field('project_header_tagline', 'option');

        if (get_post_type() == 'project' && !empty($project_tag)) {
            return $project_tag;
        } else {
            return get_bloginfo('description', 'display');
        }
    }

    public function copyright()
    {
        return get_field('copyright', 'option');
    }
}
