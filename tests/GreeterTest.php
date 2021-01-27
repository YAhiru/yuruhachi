<?php
declare(strict_types=1);
namespace Yahiru\Yuruhachi;

use PHPUnit\Framework\TestCase;

class GreeterTest extends TestCase
{
    public function testGreet() : void
    {
        $greeter = new Greeter();
        $this->assertSame(
            'Hello foo',
            $greeter->greet('foo')
        );
    }
}
