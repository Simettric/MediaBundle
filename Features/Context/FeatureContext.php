<?php
/**
 *
 *
 * @author Asier Marqués <asiermarques@gmail.com>
 */

namespace Simettric\MediaBundle\Features\Context;

use Behat\MinkExtension\Context\RawMinkContext;

class FeatureContext extends RawMinkContext
{
    /**
     * @var string|null $name
     */
    private $name = null;

    /**
     * @Given my name is :name
     */
    public function myNameIs($name)
    {
        $this->name = $name;
    }

    /**
     * @When I visit the hello world page
     */
    public function iVisitTheHelloWorldPage()
    {
        $this->getSession()->visit($this->locatePath("/"));
    }

    /**
     * @Then I should see :message
     */
    public function iShouldSee2($message)
    {
        $this->assertSession()->pageTextContains($message);
    }
}