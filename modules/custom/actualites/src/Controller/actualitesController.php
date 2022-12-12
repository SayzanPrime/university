<?php

namespace Drupal\actualites\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class actualitesController extends ControllerBase
{
    public function get_actualites()
    {
		$title = t("Actualités");
		$items = [];		
        try {
			// Load the content.
			$nids = \Drupal::entityQuery('node')->condition('type','news')->execute();
            $nodes = \Drupal\node\Entity\Node::loadMultiple($nids); 

			$i=0;
			foreach ($nodes as $content) {
				
			 $items[$i]['titre'] = $content->title->value;
			 $items[$i]['corps'] = $content->body->value;
			 $items[$i]['date'] = $content->field_date->value;
			 $items[$i]['image'] = $content->field_image->value;

			 $options = ['absolute' => TRUE];
			 $actu_url = \Drupal\Core\Url::fromRoute('entity.node.canonical', ['node' => $content->nid->value], $options);
			 $actu_url = $actu_url->toString();
			 $items[$i]['actu_url'] = $actu_url;

			 $uri = $content->field_image->entity->getFileUri();
				$url = file_create_url($uri);
			  $items[$i]['url'] =$url;
			   $i++;
			}
		}
			
			
	

         catch (RequestException $e) {
            // log exception;
        }

        return array(
            '#theme' => 'news',
            '#title' => $title,
            '#items' => $items,
			
        );
    
	
	}
}