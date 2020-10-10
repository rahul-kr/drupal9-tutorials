<?php

namespace Drupal\custom_page\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;

/**
 * Class WelcomeController.
 */
class WelcomeController extends ControllerBase {

  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    
    $header = [
      ['data' => 'wid'],
      ['data' => 'type'],
      ['data' => 'timestamp'],
    ];
    $query = Database::getConnection()->select('watchdog', 'd');
    $result = $query
      ->fields('d', ['wid', 'type', 'timestamp'])
      ->orderBy('d.wid')
      ->range(0, 5)
      ->execute();
    $rows = [];
    foreach ($result as $row) {
      $rows[] = ['data' => (array) $row];
    }

    return [
      '#theme' => 'table',
      '#header' => $header,
      '#rows' => $rows,
      '#empty' => $this->t("There are no watchdog records found in the db"),
    ];

    // return [
    //   '#theme' => 'my_template',
    //   '#test_var' => $this->t('This is the dummy value for dummy variable'),
    // ];
  }

}
