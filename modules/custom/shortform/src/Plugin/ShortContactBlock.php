<?php
/**
 * @file
 * Contains \Drupal\shortform\Plugin\Block\ShortContactBlock.
 */
namespace Drupal\shortform\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;
/**
 * Provides a 'contact' block.
 *
 * @Block(
 *   id = "short_contact_block",
 *   admin_label = @Translation("Short Contact block"),
 *   category = @Translation("Custom Short Contact Form block")
 * )
 */
class ShortContactBlock extends BlockBase implements BlockPluginInterface {
  
  public function build() {
    return \Drupal::formBuilder()->getForm('Drupal\shortform\Form\ShortContactForm');
    
 }
     
}