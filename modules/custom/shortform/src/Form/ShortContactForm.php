<?php

/**
 * @file
 * Contains Drupal\shortform\ShortContactForm
 */

namespace Drupal\shortform\Form;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\ChangedCommand;
use Drupal\Core\Ajax\CssCommand;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Ajax\InvokeCommand;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ShortContactForm extends FormBase {

  public function getFormId() {
    return 'shortcontactform';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['first_name'] = array(
      '#type' => 'textfield',
      '#title' => t('First Name'),
      '#required' => TRUE,
    );
	$form['last_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Last Name'),
      '#required' => False,
    );
    $form['email'] = array(
      '#type' => 'email',
      '#title' => t('Email'),
      '#required' => TRUE,
    );
    //$form['actions']['#type'] = 'actions';
	
    $form['button'] = array(
      '#type' => 'button',
      '#value' => t('GO'),      
	  '#ajax' => array(
        'callback' => 'Drupal\shortform\Form\ShortContactForm::randomUsernameCallback',
        'event' => 'click',
        'progress' => array(
          'type' => 'throbber',
          'message' => 'Getting Random Username',
        ),        
      ),
    );
    return $form;    
   
  }
  
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message('Nothing Submitted. Just an Example.');
  }
  
  public function randomUsernameCallback(array &$form, FormStateInterface $form_state) {
    // Get all User Entities.
    $all_users = entity_load_multiple('user');
    
    // Remove Anonymous User.
    array_shift($all_users);
    
    // Pick Random User.
    $random_user = $all_users[array_rand($all_users)];

    // Instantiate an AjaxResponse Object to return.
    $ajax_response = new AjaxResponse();
    
    // ValCommand does not exist, so we can use InvokeCommand.
    $ajax_response->addCommand(new InvokeCommand('#edit-first-name', 'val' , array($random_user->get('name')->getString())));
    
    // ChangedCommand did not work.
    //$ajax_response->addCommand(new ChangedCommand('#edit-user-name', '#edit-user-name'));
    
    // We can still invoke the change command on #edit-user-name so it triggers Ajax on that element to validate username.
    $ajax_response->addCommand(new InvokeCommand('#edit-first-name', 'change'));
    
    // Return the AjaxResponse Object.
    return $ajax_response;
  }
}
