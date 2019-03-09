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

/**
 * Contribute form.
 */
class RequestConfirmationForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
	  return 'request_confirmation_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
	  $form['lname'] = array(
      '#type' => 'textfield',
      '#title' => t('Last Name'),
      '#required' => TRUE,
    );
	/*$form['actions'] = [
      '#type' => 'actions',
    ];*/
	$form['actions']['submit'] = [
	  '#type' => 'submit',
	  '#title' => $this->t('Submit'),	  
	];
	return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
	  if($form_state->getValue('lname')) {
       $form_state->setErrorByName('lname', $this->t('Please enter Last Name'));
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
}
?>