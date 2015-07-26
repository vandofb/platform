<?php
namespace PayPal;

function autoload($name)
{
    if (\substr_compare($name, "PayPal\\", 0, 6) !== 0) return;

    $stem = \substr($name, 6);
    $pathified_stem = \str_replace(array("\\", "_"), '/', $stem);

    $path = __DIR__ . "/" . $pathified_stem . ".php";
    if (\is_file($path)) {
        require_once $path;
    }
}

\spl_autoload_register('PayPal\autoload');
