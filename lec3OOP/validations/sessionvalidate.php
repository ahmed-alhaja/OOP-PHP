<?php
require_once dirname(__FILE__, 2) . '/functions/sessionfunc.php';

function validateRequird(array $request)
{
    foreach ($request as $key => $value) {
        if ($value === null || (is_string($value) && trim($value) === '')) {
            Session::set($key, "This $key is required");
        }
    }
}
