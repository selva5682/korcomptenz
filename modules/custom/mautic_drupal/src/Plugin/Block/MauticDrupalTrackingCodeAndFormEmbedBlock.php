<?php
/**
 * File: mautic_drupal/Block/MauticDrupalTrackingCodeAndFormEmbed.php
 */
namespace Drupal\mautic_drupal\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;
/**
 * Class TrackingCode
 * @package Drupal\mautic_drupal\Block
 *
 * @Block(
 *   id = "mautic_drupal_tracking_code_and_form_embed_block",
 *   admin_label = @Translation("Mautic Tracking Code and Form Embed"),
 *   category = @Translation("System"),
 * )
 */
class MauticDrupalTrackingCodeAndFormEmbedBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
	  $config = $this->config('mautic_drupal.settings');
    $node = \Drupal::request()->attributes->get('node');
    if ($node) {
      $current_path = \Drupal::service('path.current')->getPath(); // Unsure if this is the best way to get the current path
      $attributes = [
        'title' => $node->getTitle(),
        'type' => $node->getType(),
        'language' => \Drupal::languageManager()->getCurrentLanguage()->getId(), // get name: \Drupal::languageManager()->getCurrentLanguage()->getName()
        'referrer' => isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $current_path,
        'url' => $current_path
      ];
      $encoded_attributes = urlencode(base64_encode(serialize($attributes)));
    } else {
      $encoded_attributes = '';
    }
    $config = \Drupal::service('config.factory')->get('mautic_drupal.settings');
    echo $mautic_base_url = trim($config->get('base_url'), ' \t\n\r\0\x0B/');
    $form_js_config = $config->get('load_form_js');
    if ($form_js_config) {
      $form_js = '<script src="' . $mautic_base_url . '/media/js/mautic-form.js"></script>';
    } else {
      $form_js = '';
    }
    return array (
      '#type' => 'markup',
      '#markup' => $this->t('<img style="display:none" src="' . $mautic_base_url . '/mtracking.gif?d=' . $encoded_attributes . '" />' . $form_js)
    );
  }
}