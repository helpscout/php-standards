<?php

// Brace on the same line
$instance = new class extends \Batch implements \HandleableInterface {
    // Class content
};

// Brace on the next line
$instance = new class extends \Batch implements
    \ArrayAccess,
    \Countable,
    \Serializable
{
    // Class content
};
