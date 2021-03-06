<?php

namespace FM\ElfinderBundle\Tests\DependencyInjection;

use FM\ElfinderBundle\DependencyInjection\Configuration;
use Matthias\SymfonyConfigTest\PhpUnit\AbstractConfigurationTestCase;

/**
 * Class ConfigurationTest.
 */
class ConfigurationTest extends  AbstractConfigurationTestCase
{
    protected function getConfiguration()
    {
        return new Configuration();
    }

    public function testValuesAreInvalidIfRequiredValueIsNotProvided()
    {
        $this->assertConfigurationIsInvalid(
            array(
                array(),
            )
        );
    }
}
