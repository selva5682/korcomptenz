<?php

/**
 * @file
 * Contains \Drupal\mainblockblogsection\Plugin\Block\MainblogsectionBlock.
 */

namespace Drupal\mainblockblogsection\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'MainblogsectionBlock' block.
 *
 * @Block(
 *  id = "block_main_section_blog_and_resource",
 *  admin_label = @Translation("Block Main Section Blog and Resource"),
 * )
 */
class MainblogsectionBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {	
  		$db = \Drupal::database();
        $data = $db->select('node_field_data','t')->fields('t')->execute();

        return array(
            '#theme' => 'mi_modulo',
            '#descripcion' => 'Lista de productos',
            '#nodos' => $data
        );
  }

}
