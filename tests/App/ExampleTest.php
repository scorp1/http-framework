<?php

namespace Test\App;

use App\Example;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testSuccess(): void
    {
        $example = new Example();
        $result = $example->do();

        self::assertEquals(33, $result);
    }
}