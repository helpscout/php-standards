<?php
namespace Vendor\Package;

class CompactCode
{
    public function __construct()
    {
        smarty('path/to/template', [
            'name' => 'John Smith',
            'age'  => 32,
        ]);
    }
}
