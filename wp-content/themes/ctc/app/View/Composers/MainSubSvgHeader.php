<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class MainSubSvgHeader extends Composer
{
    /**
       * List of views served by this composer.
       *
       * @var array
       */
    protected static $views = [
    'partials.content-single-faq',
    'taxonomy-service',
  ];


    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
        'main_heading'  => $this->mainHeading(),
        'sub_heading'   => $this->subHeading(),
        'header_cta'    => $this->headerCta(),
        'svg_icon'      => $this->svgIcon(),
    ];
    }

    public function theId()
    {
        if (is_tax()) {
            $term = get_queried_object();
            $id = $term->taxonomy . '_' . $term->term_id;
        } else {
            $id = get_the_ID();
        }

        return $id;
    }

    public function mainHeading()
    {
        return get_field('main_heading', $this->theId());
    }

    public function subHeading()
    {
        return get_field('sub_heading', $this->theId());
    }

    public function headerCta()
    {
        return get_field('header_cta', $this->theId());
    }

    public function svgIcon()
    {
        return get_field('svg_icon', $this->theId());
    }
}
