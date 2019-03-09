<?php
/**
 * @file
 * Contains \Drupal\kor_cookies_consent\Form\KorCookiesconsentForm.
 */
namespace Drupal\kor_cookies_consent\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\CssCommand;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Database\Database;
use Symfony\Component\HttpFoundation;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Session\AccountProxyInterface;

class KorCookiesconsentForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  protected $currentUser; 
  public function getFormId() {
    return 'cookiesconsent_free';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
	
	#$ip = $this->get_client_ip_env();
	#$ips = $this->getUserIpAddr();
	#$ips = explode(":",$ip);
	#$ips = $_SERVER['REMOTE_ADDR']; 
	$ip_address = \Drupal::request()->getClientIp();
	
    # Check the already IP Address start
	if(isset($_GET['ip_exit'])){
		$already_ip = db_select(ip_cookies_consent_lists, 'u')->fields('u')->condition('ip_address', $ip_address)->execute()->fetchAssoc();
		if($already_ip['ip_address'] == $ip_address){
			echo '<div id="ip_checking">1</div>';
		} else { 
			echo '<div id="ip_checking">0</div>';
		}
	}
	# Check the already IP Address end
	
   	$form['ip_address'] = array(
      '#type' => 'hidden',
      '#value' => $ip_address,
	  
    );
	$form['actions']['#type'] = 'actions';
	$form['actions']['cookies_submit'] = array(
	  '#type' => 'submit',
	  '#value' => $this->t('Continue and Accept All'),
	  '#attributes' => array('class' => array('btn btn-primary ml-3 mt-4')),
	  '#button_type' => 'primary',
	);
    
	$form['actions']['cookies_declined'] = array(
	  '#type' => 'button',
	  '#attributes' => array('class' => array('btn btn-primary ml-3 mt-4')),
	  '#value' => $this->t('Cancel'),
	);
	
    return $form;
  }

	public function submitForm(array &$form, FormStateInterface $form_state) {	 
		$ip_address = $form_state->getValue('ip_address');
		$ip_submit = $form_state->getValue('op');
		$loc = file_get_contents('http://ip-api.com/json/'.$ip_address.'?lang=en');
		$obj = json_decode($loc);
		if($ip_submit == 'Cancel'){
			$astatus = '0';
		} else {
			$astatus = '1';	
		}
		$already_ip = db_select(ip_cookies_consent_lists, 'u')->fields('u')->condition('ip_address', $ip_address)->execute()->fetchAssoc();
		if($obj->status == 'fail'){ 			
			if($already_ip['ip_address'] !=''){
				
			} else {
				$conn = \Drupal::database();
				$conn->insert('ip_cookies_consent_lists')->fields(
				  array(
					'ip_address' => $obj->query,
					'isp_name' => '',
					'country_code' => '',
					'country_name' => '',
					'state_region' => '',
					'state_name' => '',
					'city_name' => '',
					'ip_latitude' => '',
					'ip_longitude' => '',
					'ip_timezone' => '',
					'ip_zip' => '',
					'ip_status' => $astatus,
					'ip_created_at' => format_date(time(), 'custom', 'Y-m-d H:i:s'),
				  )
				)->execute();
			}
		} else {	
			#$already_ip = db_select(ip_cookies_consent_lists, 'u')->fields('u')->condition('ip_address', $ip_address)->execute()->fetchAssoc();
			if($already_ip['ip_address'] !=''){
				
			} else {
				$conn = \Drupal::database();
				$conn->insert('ip_cookies_consent_lists')->fields(
				  array(
					'ip_address' => $obj->query,
					'isp_name' => $obj->isp,
					'country_code' => $obj->countryCode,
					'country_name' => $obj->country,
					'state_region' => $obj->region,
					'state_name' => $obj->regionName,
					'city_name' => $obj->city,
					'ip_latitude' => $obj->lat,
					'ip_longitude' => $obj->lon,
					'ip_timezone' => $obj->timezone,
					'ip_zip' => $obj->zip,
					'ip_status' => $astatus,
					'ip_created_at' => format_date(time(), 'custom', 'Y-m-d H:i:s'),
				  )
				)->execute();
				#drupal_set_message("Cookies consent has been insert.");
			}
		}
	}
  
	function get_client_ip_env() {
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';
	 
		return $ipaddress;
	}
	
		 
}