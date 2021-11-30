<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            $project_archive = get_field('project_archive_title', 'option');
            $faq_archive = get_field('faq_archive_title', 'option');
            $testimonial_archive = get_field('testimonial_archive_title', 'option');

            if ( is_post_type_archive('project') && !empty($project_archive) ) {
                return $project_archive;
            } elseif ( is_post_type_archive('faq') && !empty($faq_archive) ) {
                return $faq_archive;
            } elseif ( is_post_type_archive('testimonial') && !empty($testimonial_archive) ) {
                return $testimonial_archive;
            } else {
                return get_the_archive_title();
            }
        }

        if (is_search()) {
            /* translators: %s is replaced with the search query */
            return sprintf(
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }
}
