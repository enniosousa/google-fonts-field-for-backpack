<?php

namespace Enniosousa\GoogleFontsFieldForBackpack\Tests;

use Orchestra\Testbench\TestCase;
use Enniosousa\GoogleFontsFieldForBackpack\GoogleFontsFieldForBackpackServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [GoogleFontsFieldForBackpackServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
