<?php
/**
 * Sumo Code Style Formatter
 *
 * Config for [php-cs-fixer](http://cs.sensiolabs.org/)
 *
 * We base the code style on PSR2, with the additional `$fixers`
 *
 * @link https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/4fac6225fd9c254e04e7cbe3a99bb257c966b97d/src/RuleSet.php#L56
 *
 */
$fixers = [
    '@PSR2'                                       => true,
    'psr0'                                        => false, // Remove PSR0 filter, our Sumo files don't match namespace with path
    'array_syntax'                                => [      // [contrib] PHP array's should use the PHP 5.4 short-syntax.
        'syntax' => 'short'
    ],
    'binary_operator_spaces'                      => [      // Binary operators should be surrounded by at least one space.
        'align_double_arrow' => true,
        'align_equals'       => true,
    ],
    'blank_line_before_return'                    => true,  // An empty line feed should precede a return statement.
    'cast_spaces'                                 => true,  // A single space should be between cast and variable.
    'include'                                     => true,  // Include and file path should be divided with a single space.
    'indentation_type'                            => true,  // Code MUST use an indent of 4 spaces, and MUST NOT use tabs for indenting
    'no_closing_tag'                              => true,  // The closing tag MUST be omitted from files containing only PHP.
    'no_multiline_whitespace_around_double_arrow' => true,  // Operator => should not be surrounded by multi-line whitespaces
    'no_spaces_after_function_name'               => true,  // When making a method or function call, there MUST NOT be a space between the method or function name and the opening parenthesis.
    'no_spaces_inside_parenthesis'                => true,  // There MUST NOT be a space after the opening parenthesis. There MUST NOT be a space before the closing parenthesis.
    'no_trailing_comma_in_list_call'              => true,  // Remove trailing commas in list function calls
    'no_trailing_comma_in_singleline_array'       => true,  // PHP single-line arrays should not have trailing comma.
    'no_trailing_whitespace'                      => true,  // Remove trailing whitespace at the end of blank lines.
    'ordered_imports'                             => true,  // Ordering use statements.
    'short_scalar_cast'                           => true,  // Cast (boolean) and (integer) should be written as (bool) and (int), (double) and (real) as (float).
    'single_blank_line_at_eof'                    => true,  // A PHP file without end tag must always end with a single empty line feed.
    'single_import_per_statement'                 => true,  // There MUST be one use keyword per declaration.
    'single_line_after_imports'                   => true,  // Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block.
    'switch_case_space'                           => true,  // Removes extra spaces between colon and case value.
    'ternary_operator_spaces'                     => true,  // Standardize spaces around ternary operator.
];

$finder = PhpCsFixer\Finder::create();

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setCacheFile('/hs-app/.php_cs.cache')
    ->setRules($fixers)
    ->setFinder($finder);
