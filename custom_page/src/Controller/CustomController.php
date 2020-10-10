<?php

namespace Drupal\custom_page\Controller;

// Every controller must have a name space.

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
 
class CustomController extends ControllerBase {

    public function dummyPage() {

        return array(
            '#markup' => 'Hey World! ',
          );
        // return new Response('Hey there, Here is my dummy page');
    }
}
