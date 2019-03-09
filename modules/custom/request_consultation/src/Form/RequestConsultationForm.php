<?php
/**
 * @file
 * Contains \Drupal\request_consultation\Form\RequestForm.
 */

namespace Drupal\request_consultation\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;
use Drupal\Core\Url;
use Drupal\Component\Serialization\Json;

/**
 * Contribute form.
 */
class RequestConsultationForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
	  return 'request_consultation_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
	  $form['fname'] = array(
      '#type' => 'textfield',
      '#title' => t('First Name'),
      '#required' => TRUE,
    );
	/*$form['actions'] = [
      '#type' => 'actions',
    ];*/
	$form['actions']['submit'] = [
	  '#type' => 'link',
	  '#title' => $this->t('Submit'),
	  '#url' => Url::fromRoute('request_consultation.modal', ['js' => 'nojs']),
	  '#attributes' => [
		'class' => ['button', 'use-ajax'],
		'data-dialog-type' => 'modal1',
		'data-dialog-options' => Json::encode(['width' => 400]),
	  ],
	  '#attached' => ['library' => ['core/drupal.dialog.ajax']]
	];
	
	 
   
	return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
	  if($form_state->getValue('fname')) {
       $form_state->setErrorByName('fname', $this->t('Please enter First Name'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
	foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }
  }
  
  public function modal1($js = 'nojs') {
    if ($js == 'ajax') {
      $options = [
        'dialogClass' => 'popup-dialog-class',
        //'width' => '75%', // apply or override the width of the dialog
      ];
      $response = new AjaxResponse();
      $response->addCommand(new OpenModalDialogCommand(t('Modal title'), t('This is an exasssmple of a modal with Javascript.'), $options));
      return $response;
    } else {
      return t('This is an example of a fallback for a modal withouxxxt Javascript.');
    }
  }
}
?>