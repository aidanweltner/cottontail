<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TaxService extends Composer
{

  /**
   * List of views served by this composer.
   *
   * @var array
   */
    protected static $views = [
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
          'long_description'  => $this->longDescription(),
          'project_desc'      => $this->projectDesc(),
      ];
    }

    public function taxId()
    {
        $term = get_queried_object();
        $tax_id = $term->taxonomy . '_' . $term->term_id;

        return $tax_id;
    }

    public function longDescription()
    {
        return get_field('long_description', $this->taxId());
    }

    public function projectDesc()
    {
        get_field('project_grid_description', $this->taxId());
    }
}
