<?php

namespace Drupal\mainblockblogsection\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Url;

/**
 * Class DisplayUcpapiController.
 *
 * @package Drupal\ucphysicians\Controller
 */
class DisplayBlogtremsController extends ControllerBase {


  public function content() {
	  
	$output_content = '';
	$sessionstart = $_SESSION['mainblockblogsection']['session_blogpop'];
	/*$ipblog = \Drupal::request()->getClientIp();
	$rdnemail = db_select('simplenews_subscriber__field_ip_address', 'ip')->fields('ip')->condition('field_ip_address_value', $ipblog)->execute()->fetchAssoc();
	
	if($rdnemail['field_ip_address_value'] == $_GET['ipaddress']){
		echo '<div id="subscription_ip">ip-is-already</div>';		
	} else {
		echo '<div id="subscription_ip">'.$ipblog.'</div>';
	}*/
	#$results = db_query("SELECT tid, name FROM {taxonomy_term_data} WHERE vid = 1")->execute();
	$getcat = db_select('taxonomy_term_field_data', 'ct');
	#$getcat->join('taxonomy_index','ti','ti.tid = ct.tid');
	$getcat->fields('ct');
	#$getcat->fields('ti', array('nid'));
	$getcat->condition('ct.vid', 'category');
	#$getcat->orderBy('ct.weight', 'ASC');
	$results = $getcat->execute(); 
		foreach($results as $result){
			$api = db_select('taxonomy_index', 'ti')->fields('ti')->condition('tid', $result->tid)->orderBy('ti.nid', 'DESC')->execute()->fetchAssoc();
			$title = db_select('node_field_data', 'nfd')->fields('nfd')->condition('nid', $api['nid'])->condition('status', 1)->execute()->fetchAssoc();
			$body = db_select('node__body', 'nb')->fields('nb')->condition('entity_id', $api['nid'])->execute()->fetchAssoc();
			$path = db_select('url_alias', 'ua')->fields('ua')->condition('source', '/node/'.$api['nid'].'')->execute()->fetchAssoc();
			$body = db_select('node__body', 'b')->fields('b')->condition('entity_id', $api['nid'])->execute()->fetchAssoc();
			$nimg = db_select('node__field_blog_banner', 'nm')->fields('nm')->condition('entity_id', $api['nid'])->condition('bundle', 'blog')
					->execute()->fetchAssoc();
									
			$aublog = db_select('node__field_blog_author', 'nba')->fields('nba')->condition('entity_id', $api['nid'])->condition('bundle', 'blog')
					->execute()->fetchAssoc();
					
			$aublogs = db_select('node__field_blog_aut_pic', 'bap')->fields('bap')->condition('entity_id', $aublog['field_blog_author_target_id'])->condition('bundle', 'blog_author')->execute()->fetchAssoc();				
						
			$gimg = db_select('file_managed', 'gm')->fields('gm')->condition('fid', $nimg['field_blog_banner_target_id'])->execute()->fetchAssoc();
			$authorimg = db_select('file_managed', 'au')->fields('au')->condition('fid', $aublogs['field_blog_aut_pic_target_id'])->execute()->fetchAssoc();
			
					
			$bdvalue = mb_strimwidth($body['body_summary'], 0, 85, '...');
			if(isset($api['nid'])){
				$blogid[] = [ 
						'bid' => $result->weight, 
						'category' => $result->name,
						'path' => $path['alias'], 
						'blogname' => $title['title'],
						'content' => $bdvalue,
						'bgimage' => $gimg['filename'],
						'bgalt' =>$nimg['field_blog_banner_alt'],
						'authorimg' => $authorimg['filename'],
						'aualt' =>$aublogs['field_blog_aut_pic_alt'],
						'ipaddress' => $ipblog,
						]; 
			}
		}
	
    return [
      '#theme' => 'my_blognew',
	  '#blogid' => !empty($blogid) ? $blogid : [],
      '#ipaddressblog' => !empty($ipblog) ? $ipblog : '',
      '#popup_session' => !empty($sessionstart) ? $sessionstart : '',
	  '#cache' => ['max-age' => 0,], 
    ];
    #return $build;
  }
  
}
