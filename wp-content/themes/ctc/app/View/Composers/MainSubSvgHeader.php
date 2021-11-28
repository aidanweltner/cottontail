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

    protected $id = 0;


    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'pre_heading'   => $this->preHeading(),
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
            $this->id = $term->taxonomy . '_' . $term->term_id;
        } else {
            $this->id = get_the_ID();
        }

        return $this->id;
    }

    public function preHeading()
    {
        return get_field('pre_heading', $this->id);
    }

    public function mainHeading()
    {
        return get_field('main_heading', $this->id);
    }

    public function subHeading()
    {
        return get_field('sub_heading', $this->id);
    }

    public function headerCta()
    {
        return get_field('header_cta', $this->id);
    }

    public function svgIcon()
    {
        return get_field('svg_icon', $this->id);
    }
}
