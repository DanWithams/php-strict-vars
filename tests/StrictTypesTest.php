<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class StrictTypesTest extends TestCase
{
    public function testCanCreateVariableTypes(): void
    {
        $this->assertInstanceOf(
            \DanWithams\PhpStrictVars\Undefined::class,
            \DanWithams\PhpStrictVars\Variable::undefined()
        );
    }
}
