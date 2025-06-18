<?php

return [
    'enabled' => env('OAUTH2_TOKEN_ROTATOR_ENABLED', true),
    'timeout' => env('OAUTH2_TOKEN_ROTATOR_TIMEOUT', 30),
    'log_channel' => env('OAUTH2_TOKEN_ROTATOR_LOG', 'stack'),
];
