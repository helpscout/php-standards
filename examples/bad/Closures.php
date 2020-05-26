<?php

// Closures should not have their bracket on a new line
$closureWithArgsVarsAndReturn = function ($arg1, $arg2) use ($var1, $var2): bool
{
    return true;
};
