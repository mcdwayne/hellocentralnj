<?php

namespace Drupal\hellocentralnj\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "hellocentralnj_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("HelloCentralNJ")
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => $this->t('Hey there Web Developers Central NJ Meetup'),
    ];
    return $build;
  }

}
