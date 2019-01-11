<?php

return [
    'server' => [
        'host' => env('SWOOLE_HTTP_HOST', '0.0.0.0'),
        'port' => env('SWOOLE_HTTP_PORT', '1215'),
        'options' => [
            'pid_file' => env('SWOOLE_HTTP_PID_FILE', base_path('storage/logs/swoole_http.pid')),
            'log_file' => env('SWOOLE_HTTP_LOG_FILE', base_path('storage/logs/swoole_http.log')),
            'daemonize' => env('SWOOLE_HTTP_DAEMONIZE', false),
            'reactor_num' => env('SWOOLE_HTTP_REACTOR_NUM', swoole_cpu_num() * 2),
            'worker_num' => env('SWOOLE_HTTP_WORKER_NUM', swoole_cpu_num() * 2),
            'task_worker_num' => env('SWOOLE_HTTP_TASK_WORKER_NUM', swoole_cpu_num() * 2),
            'package_max_length' => 20 * 1024 * 1024,
            'buffer_output_size' => 10 * 1024 * 1024,
            'socket_buffer_size' => 128 * 1024 * 1024,
            'max_request' => 3000,
            'send_yield' => true,
            'ssl_cert_file' => null,
            'ssl_key_file' => null,
        ],
    ],

    'providers' => [
        Illuminate\Auth\AuthServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
    ],
];
