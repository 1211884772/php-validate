<?php declare(strict_types=1);
namespace qphp\ValidateTest;
use PHPUnit\Framework\TestCase;

final class OutputTest extends TestCase
{
    public function testExpectFooActualFoo(): void
    {
        $this->expectOutputString('foo');

        print 'foo';
    }

    public function testExpectBarActualBaz(): void
    {
        $this->expectOutputString('bar');

        print 'baz';
    }


}
