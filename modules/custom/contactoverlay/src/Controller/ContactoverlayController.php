<?php
/**
 * @file
 * Contains \Drupal\contactoverlay\ContactoverlayController.
 */

namespace Drupal\contactoverlay\Controller;
use Drupal\Core\Controller\ControllerBase;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\OpenDialogCommand;
use Drupal\Core\Ajax\OpenModalDialogCommand;
use Drupal\node\Entity\Node;

use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\Component\Serialization\Json;

class ContactoverlayController extends ControllerBase {
  
  /**
   * @return AjaxResponse
   */
  /*public function ThankyouOverlayCallback($nid) {
    $node = Node::load($nid);
    $view = node_view($node, 'teaser');
    $html = render($view);
    
    $response = new AjaxResponse();
    $response->addCommand(new OpenModalDialogCommand(t('Modal Title'), $html));
    return $response;
  }
  */
   public function content() {
    return array(
        '#markup' => '' . t('Hello there!') . '',
    );
  }
  
  public function modal($js = 'nojs') {
    if ($js == 'ajax') {
      $options = [
        'dialogClass' => 'popup-dialog-class',
        //'width' => '75%', // apply or override the width of the dialog
      ];
      $response = new AjaxResponse();
      $response->addCommand(new OpenModalDialogCommand(t('Modal title'), t('This is an example of a modal with Javascript.'), $options));
      return $response;
    } else {
      return t('This is an example of a fallback for a modal without Javascript.');
    }
  }
}