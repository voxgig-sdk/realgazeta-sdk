<?php
declare(strict_types=1);

// Realgazeta SDK exists test

require_once __DIR__ . '/../realgazeta_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = RealgazetaSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
