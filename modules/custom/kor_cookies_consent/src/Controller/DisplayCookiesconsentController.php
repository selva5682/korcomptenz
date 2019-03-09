<?php

namespace Drupal\kor_cookies_consent\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Url;

/**
 * Class DisplayCookiesconsentController.
 *
 * @package Drupal\kor_cookies_consent\Controller
 */
class DisplayCookiesconsentController extends ControllerBase {


  public function getContent() {
    // First we'll tell the user what's going on. This content can be found
    // in the twig template file: templates/description.html.twig.
    // @todo: Set up links to create nodes and point to devel module.
    $build = [
      'description' => [
        '#theme' => 'mydata_description',
        '#description' => 'foo',
        '#attributes' => [],
      ],
    ];
    return $build;
  }

  /**
   * Display.
   *
   * @return string
   *   Return Hello string.
   */
  public function display() {
    /**return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: display with parameter(s): $name'),
    ];*/
	if(isset($_GET['delete_user'])){
		$query = \Drupal::database();
		$query->delete('ip_cookies_consent_lists')
                   ->condition('IP_id',$_GET['delete_user'])
                  ->execute();
		#watchdog('bd_contact', 'Deleted BD Contact Submission with id %id.', array('%id' => $id));
		drupal_set_message(t('User IP has been deleted.'));
	}
    //create table header
    $header_table = array(
      'IP_id'=>    t('S.No'),
      'ip_address' => t('IP Adress'),
      'isp_name'=>t('ISP Name'),
	  'country_name'=>t('Country'),
	  'state_name'=>t('State'),
	  'city_name'=>t('City'),
      'ip_latitude' => t('Latitude'),
	  'ip_longitude' => t('Longitude'),
      'ip_timezone' => t('Timezone'),
      'ip_zip' => t('Zip Code'),
      'ip_status' => t('Status'),
      'opt' => t('operations'),
      #'opt1' => t('operations'),
    );

//select records from table
	$query = db_select('ip_cookies_consent_lists', 'ip')
			 ->fields('ip');
	$pager = $query->extend('Drupal\Core\Database\Query\PagerSelectExtender')->limit(20);
	$results = $pager->execute();
    $rows=array();
    foreach($results as $data){
        $delete = Url::fromUserInput('/admin/config/system/ip_cookies_consent/?delete_user='.$data->IP_id);
        $edit   = Url::fromUserInput('/admin/config/system/user_edit/?bmi_num='.$data->IP_id);
		if($data->ip_status == '1') { $status =  'Active'; } else { $status =  'Declined'; }
		#if($data->bmi_inches == '0') { $inches = '-'; } else { $inches = $data->bmi_inches; }
      //print the data from table
             $rows[] = array(
				'id' =>$data->IP_id,
                'ip_address' => $data->ip_address,
                'isp_name' => $data->isp_name,
				'country_name' => $data->country_name.'('.$data->country_code.')',
				'state_name' => $data->state_name,
				'city_name' => $data->city_name,
				'ip_latitude' => $data->ip_latitude,
                'ip_longitude' => $data->ip_longitude,
                'ip_timezone' => $data->ip_timezone,
                'ip_zip' => $data->ip_zip,
                'ip_status' => $status,                 
                #\Drupal::l('Edit', $edit),
				 \Drupal::l('Delete', $delete),
            );

    }
    //display data in site
    $form['table'] = [
            '#type' => 'table',
            '#header' => $header_table,
            '#rows' => $rows,
            '#empty' => t('No users found'),
        ];
	// Display pager.
    $form['pager'] = array(
      '#type' => 'pager'
    );
    return $form;

  }

}
