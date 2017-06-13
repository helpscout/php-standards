<?php
/**
 * This sniff prohibits the use of xdebug functions in production code
 *
 * @author     Platform Team <developer@helpscout.net>
 * @copyright  2015 Help Scout
 */
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff;

/**
 * This sniff prohibits the use of xdebug functions
 */
class HelpScout_Sniffs_Functions_DisallowXDebugSniff extends ForbiddenFunctionsSniff
{
    public $forbiddenFunctions = [
        'var_dump'                      => null,
        'xdebug_break'                  => null,
        'xdebug_call_class'             => null,
        'xdebug_call_file'              => null,
        'xdebug_call_function'          => null,
        'xdebug_call_line'              => null,
        'xdebug_disable'                => null,
        'xdebug_enable'                 => null,
        'xdebug_get_collected_errors'   => null,
        'xdebug_get_headers'            => null,
        'xdebug_is_enabled'             => null,
        'xdebug_memory_usage'           => null,
        'xdebug_peak_memory_usage'      => null,
        'xdebug_start_error_collection' => null,
        'xdebug_stop_error_collection'  => null,
        'xdebug_time_index'             => null
    ];
}

/* End of file DisallowXDebugSniff.php */
