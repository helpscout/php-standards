<?php
namespace Vendor\Package;

class Properties
{
    /**
     * Retire the cache after a period of time
     */
    const MAX_AGE_DAYS = 5;

    /**
     * We prefer bool and not boolean
     *
     * @var bool
     */
    public $canProcessUser;

    /**
     * We prefer int and not integer
     *
     * @var int
     */
    private $activeUserCount;
}
