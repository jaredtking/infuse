<?php

/**
 * @package infuse/framework
 * @author Jared King <j@jaredtking.com>
 * @link http://jaredtking.com
 * @version 1.0.0
 * @copyright 2015 Jared King
 * @license MIT
 */

return [
    'middleware' => [
      'auth',
      'admin',
      'email',
    ],
    'all' => [
        'auth',
        'admin',
        'api',
        'cron',
        'email',
        'home',
        'statistics',
        'users',
    ]
];
