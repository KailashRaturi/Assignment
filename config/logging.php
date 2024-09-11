// config/logging.php
<?php
return [

    'channels' => [
        
        // Other channels...

        'api_requests' => [
            'driver' => 'single',
            'path' => storage_path('logs/api_requests.log'),
            'level' => 'info',
        ],
        'customlog'=>[
            'driver' => 'single',
            'path' => storage_path('logs/mycustomlog.log'),
            'level' => 'info',

        ],
        'customlog1'=>[
            'driver' => 'single',
            'path' => storage_path('logs/mycustomlog1.log'),
            'level' => 'info',

        ]

    ],

];
