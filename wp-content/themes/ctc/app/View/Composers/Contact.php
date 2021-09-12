<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Contact extends Composer
{
  /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
      'partials.footer',
  ];

  protected $is_contact = false;

  /**
   * Data to be passed to view before rendering, but after merging.
   *
   * @return array
   */
  public function override()
  {
      return [
          'footer_contact' => $this->is_contact,
      ];
  }

  public function isContactPage()
  {
    $classes = get_body_class();

    if ( in_array('contact', $classes) ) {
      $this->is_contact = true;
    }
  }
}