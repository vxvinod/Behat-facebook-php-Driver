<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
    
    require_once 'php-webdriver/WebDriverTimeouts.php';
    
require_once '/home/quickstart/Documents/facebook-phpdriver/php-webdriver/__init__.php';

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{


public $web_driver;

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
        $wd_host = 'http://localhost:4444/wd/hub'; // this is the default
        $capabilities = array(WebDriverCapabilityType::BROWSER_NAME => 'firefox');
        $web_driver = new WebDriver($wd_host, $capabilities);
         $web_driver->get('http://wwwuat.royalmail.com/address-book/import');
          $web_driver->findElement(WebDriverBy::id("edit-name"))->sendKeys("vinod@example.com");
       $web_driver->findElement(WebDriverBy::id("edit-pass"))->sendKeys("test1234");
       $web_driver->findElement(WebDriverBy::id("edit-submit"))->click();
       
       $web_driver->findElement(WebDriverBy::id('edit-ab-csv-file'))->sendKeys('/home/quickstart/Documents/facebook-phpdriver/invalidfile.csv');
       $web_driver->findElement(WebDriverBy::id('edit-duplicates-opt-1'))->click();
       $web_driver->findElement(WebDriverBy::id('edit-next'))->click();
//        $web_driver = new WebDriver();
       // $session=$web_driver->session('firefox');
       // $session->open('https://wwwuat.royalmail.com');
      
           
    }

//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }


 /**
     * @When /^I go to "([^"]*)"$/
     */
    public function iGoTo($arg1)
    {
      
      
        
    }

    /**
     * @Then /^I should see "([^"]*)"$/
     */
    public function iShouldSee($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I should see the following <links>$/
     */
    public function iShouldSeeTheFollowingLinks(TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @When /^I follow "([^"]*)"$/
     */
    public function iFollow($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^I am on "([^"]*)"$/
     */
    public function iAmOn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I wait for (\d+) seconds$/
     */
    public function iWaitForSeconds($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I upload file$/
     */
    public function iUploadFile()
    {
        throw new PendingException();
    }

    /**
     * @Given /^I select the radio button "([^"]*)"$/
     */
    public function iSelectTheRadioButton($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I press "([^"]*)"$/
     */
    public function iPress($arg1)
    {
        throw new PendingException();
    }

//
}
