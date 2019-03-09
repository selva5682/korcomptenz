<?php

namespace Drupal\simplenews\Form;

use Drupal\Core\Form\FormStateInterface;

/**
 * Configure simplenews subscriptions of the logged user.
 */
class SubscriptionsBlockForm extends SubscriptionsFormBase {

  protected $uniqueId;

  /**
   * A message to use as description for the block.
   *
   * @var string
   */
  public $message;

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    if (empty($this->uniqueId)) {
      throw new \Exception('Unique ID must be set with setUniqueId.');
    }
    return 'simplenews_subscriptions_block_' . $this->uniqueId;
  }

  /**
   * {@inheritdoc}
   */
  public function setUniqueId($id) {
    $this->uniqueId = $id;
  }

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    // Hide subscription widget if only one newsletter available.
	$ip = \Drupal::request()->getClientIp();
	
    if (count($this->getNewsletters()) == 1) {
      $this->getSubscriptionWidget($form_state)->setHidden();
    }

    $form = parent::form($form, $form_state);

    $form['message'] = array(
      '#type' => 'item',
      '#markup' => $this->message,
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  protected function actions(array $form, FormStateInterface $form_state) {
    // If only one newsletter, show Subscribe/Unsubscribe instead of Update.
    $actions = parent::actions($form, $form_state);
    if ($this->getOnlyNewsletterId() != NULL) {
      $actions[static::SUBMIT_UPDATE]['#access'] = FALSE;
      $actions[static::SUBMIT_SUBSCRIBE]['#access'] = !$this->entity->isSubscribed($this->getOnlyNewsletterId());
      $actions[static::SUBMIT_UNSUBSCRIBE]['#access'] = $this->entity->isSubscribed($this->getOnlyNewsletterId());
    }
    return parent::actions($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function getSubmitMessage(FormStateInterface $form_state, $op, $confirm) {
    switch ($op) {
      case static::SUBMIT_UPDATE:
        return $this->t('The newsletter subscriptions for %mail have been updated.', array('%mail' => $form_state->getValue('mail')[0]['value']));

      case static::SUBMIT_SUBSCRIBE:
        if ($confirm) {
          return $this->t('<style>#myModal{display:none !important;}</style><span onclick="thankclose_popup()" class="thank_closed">×</span><div class="ff-thankyou"> <div class="jumbotron text-center animation-element slide-left"> <div class="icon-contt "><span><img src="/themes/custom/korone/images/flat-fee/thumb-icon.png" width="70"></span></div>Thanks for enrolling yourself in receiving our newsletter. We would send you relevant material based on your industry background.</div></div>');
        }
        return $this->t('<style>#myModal{display:none !important;}</style><span onclick="thankclose_popup()" class="thank_closed">×</span><div class="ff-thankyou"> <div class="jumbotron text-center animation-element slide-left"> <div class="icon-contt "><span><img src="/themes/custom/korone/images/flat-fee/thumb-icon.png" width="70"></span></div>Thanks for enrolling yourself in receiving our newsletter. We would send you relevant material based on your industry background.</div></div>');

      case static::SUBMIT_UNSUBSCRIBE:
        if ($confirm) {
          return $this->t('<style>#myModal{display:none !important;}</style><span onclick="thankclose_popup()" class="thank_closed">×</span><div class="ff-thankyou"> <div class="jumbotron text-center animation-element slide-left"> <div class="icon-contt "><span><img src="/themes/custom/korone/images/flat-fee/thumb-icon.png" width="70"></span></div>You will receive a confirmation e-mail shortly containing further instructions on how to cancel your subscription.</div></div>');
        }
        return $this->t('<style>#myModal{display:none !important;}</style><span onclick="thankclose_popup()" class="thank_closed">×</span><div class="ff-thankyou"> <div class="jumbotron text-center animation-element slide-left"> <div class="icon-contt "><span><img src="/themes/custom/korone/images/flat-fee/thumb-icon.png" width="70"></span></div>You have been unsubscribed.</div></div>');
    }
  }

}
