<?php
namespace Vendor\Package;

use FooInterface;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

/**
 * This is example code to confirm that the linter can run.
 */
class Foo extends Bar implements FooInterface
{
    public function canHaveNoCommentIfTypeHinted(int $a, int $b = null): int
    {
        if ($a === $b) {
            Bar();
        } elseif ($a > $b) {
            $foo = new Foo();
            $foo->bar($a);
        } else {
            BazClass::bar($a, $b);
        }

        return 6;
    }

    public function emptyStatementIsWarningNotError()
    {
        $i = 0;
        if ($i < 5) {
            $i++;
        } else {
            // This should warn and not fail.
        }
    }

    final public static function bar()
    {
        // method body
    }
}
