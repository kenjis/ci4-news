<?php

namespace Tests\Feature;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

/**
 * @internal
 */
final class HomeTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testGetIndex()
    {
        $result = $this->call('get', '/');

        $result->assertStatus(200);

        $result->assertSee('<title>Welcome to CodeIgniter 4!</title>');
        $result->assertSee('Environment: testing');
    }
}
