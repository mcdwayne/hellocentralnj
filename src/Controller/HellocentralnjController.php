<?php

namespace Drupal\hellocentralnj\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for HelloCentralNJ routes.
 */
class HellocentralnjController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {
    $message = "Hello to all you awesome folks at the Web Developers Central NJ Meetup! :wave: \r\n Special thanks to Leora Wenger for inviting me and always cheering me on!";
    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t($message),
    ];

    return $build;
  }

}
