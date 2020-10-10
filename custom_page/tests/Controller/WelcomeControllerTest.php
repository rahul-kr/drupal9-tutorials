<?php

namespace Drupal\custom_page\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the custom_page module.
 */
class WelcomeControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "custom_page WelcomeController's controller functionality",
      'description' => 'Test Unit for module custom_page and controller WelcomeController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests custom_page functionality.
   */
  public function testWelcomeController() {
    // Check that the basic functions of module custom_page.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
