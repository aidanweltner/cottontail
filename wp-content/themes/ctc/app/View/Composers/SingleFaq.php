<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SingleFaq extends Composer
{

  /**
   * List of views served by this composer.
   *
   * @var array
   */
    protected static $views = [
    'partials.content-single-faq',
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
        'svg_icon'      => $this->svgIcon(),
    ];
    }

    public function mainHeading()
    {
        return get_field('main_heading');
    }

    public function subHeading()
    {
        return get_field('sub_heading');
    }

    public function svgIcon()
    {
        return get_field('svg_icon');
    }
}
