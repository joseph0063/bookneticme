<?php

namespace BookneticVendor;

// Don't redefine the functions if included multiple times.
if (!\function_exists('BookneticVendor\\GuzzleHttp\\Promise\\promise_for')) {
    require __DIR__ . '/functions.php';
}
