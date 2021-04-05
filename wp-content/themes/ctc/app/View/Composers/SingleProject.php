<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SingleProject extends Composer
{

  /**
   * List of views served by this composer.
   *
   * @var array
   */
    protected static $views = [
    'partials.content-single-project',
  ];


    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
          'site' => $this->site(),
      ];
    }

    public function site()
    {
        return get_field('site_link');
    }
}
