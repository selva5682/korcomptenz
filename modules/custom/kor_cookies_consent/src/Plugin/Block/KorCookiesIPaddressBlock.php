<?php

/**
 * @file
 * Contains \Drupal\kor_cookies_consent\Plugin\Block\KorCookiesIPaddressBlock.
 */

namespace Drupal\kor_cookies_consent\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'KorCookiesIPaddressBlock' block.
 *
 * @Block(
 *  id = "cookiesconsent_free",
 *  admin_label = @Translation("IP Cookies Consent Block"),
 * )
 */
class KorCookiesIPaddressBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {	   
	$standard = \Drupal::formBuilder()->getForm('Drupal\kor_cookies_consent\Form\KorCookiesconsentForm');
    #return $standard;
	return array(
	  '#theme' => 'ip_custom_block',	
      '#title' => '',
      '#description' => 'korcomptenz.com relies on cookies to collect and process data. We may use this data to make assumptions on what content or advertising may interest you.
By clicking "Continue and Accept All", you agree to allow cookies to be placed. You can manage these settings here. To get more information about these cookies and the processing of your personal data, check our <a href="">Privacy Policy & Cookie Policy</a>.',
	  '#ip_cookiesform' => $standard
    );
  }

}
