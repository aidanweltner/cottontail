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
          'faq_section'       => $this->faqSection(),
          'faqs'              => $this->faqs(),
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

    public function faqSection()
    {
        $faq_section = [
          'heading'       => get_field('faq_heading', $this->taxId()),
          'paragraph'     => get_field('faq_paragraph', $this->taxId()),
          'faqs_services' => [
            'service_title'   => get_field('services_title', $this->taxId()),
            'services'        => get_field('services', $this->taxId()),
            'faq_title'       => get_field('faqs_title', $this->taxId()),
            'faqs'            => get_field('faqs', $this->taxId()),
          ],
          'cta'           => get_field('faq_cta', $this->taxId()),
        ];

        /* Add ability to select common links */

        return $faq_section;
    }

    public function faqs()
    {
        $args = [
          'post_type'   => 'faq',
          'tax_query'   => [
            [
              'taxonomy'  => 'service',
              'field'     => 'slug',
              'terms'     => [ get_query_var('service') ],
            ],
          ],
        ];

        $faqs = new \WP_Query($args);

        return $faqs;
    }
}
