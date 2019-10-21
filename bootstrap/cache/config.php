<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => false,
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:CHFgwgA0DeTM4oHRWV8pc6k5RCcgGmxin6bPJ8z52Q0=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Illuminate\\Html\\HtmlServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Form' => 'Illuminate\\Html\\FormFacades\\Form',
      'Html' => 'Illuminate\\Html\\HtmlFacades\\Html',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/home/alex/www/diplom/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'diplom',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'diplom',
        'username' => 'root',
        'password' => 'password',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'diplom',
        'username' => 'root',
        'password' => 'password',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'diplom',
        'username' => 'root',
        'password' => 'password',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'predis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/home/alex/www/diplom/storage/app',
      ),
      'public_uploads' => 
      array (
        'driver' => 'local',
        'root' => '/home/alex/www/diplom/public/uploads',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/home/alex/www/diplom/storage/app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/home/alex/www/diplom/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/home/alex/www/diplom/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.mailtrap.io',
    'port' => '2525',
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'encryption' => NULL,
    'username' => NULL,
    'password' => NULL,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/home/alex/www/diplom/resources/views/vendor/mail',
      ),
    ),
    'log_channel' => NULL,
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
      'webhook' => 
      array (
        'secret' => NULL,
        'tolerance' => 300,
      ),
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/home/alex/www/diplom/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'sleeping_owl' => 
  array (
    'title' => 'Sleeping Owl administrator',
    'logo' => '<svg style="padding:10px;" class="pull-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 216.123 216.123" style="enable-background:new 0 0 216.123 216.123;" xml:space="preserve" width="48px" height="48px"><g><path d="M173.65,106.51c6.549-7.024,10.567-16.436,10.567-26.774c0-8.585-2.775-16.529-7.464-23.001   c5.319-16.633,5.063-34.71-0.795-51.16L173.974,0l-5.827,1.03c-12.002,2.121-23.325,6.931-33.201,14.037H81.537v0.252   C71.577,8.071,60.122,3.176,47.977,1.03L42.149,0l-1.985,5.575c-5.858,16.45-6.114,34.527-0.795,51.16   c-4.689,6.472-7.464,14.417-7.464,23.001c0,10.338,4.018,19.75,10.567,26.773c-1.028,0.797-1.846,1.88-2.308,3.179   c-10.874,30.534-2.352,64.292,21.71,86c1.048,0.945,2.171,1.862,3.332,2.761v10.673c0,3.866,3.134,7,7,7s7-3.134,7-7v-2.194   c8.347,3.957,17.834,6.887,27.532,8.373c0.352,0.054,0.706,0.081,1.06,0.081s0.708-0.027,1.06-0.081   c4.446-0.681,16.123-2.878,28.059-8.434v2.255c0,3.866,3.134,7,7,7s7-3.134,7-7v-10.656c1.139-0.883,2.254-1.805,3.332-2.777   c24.062-21.709,32.583-55.466,21.71-86C175.496,108.389,174.678,107.306,173.65,106.51z M107.969,152.066   c-4.506-10.226-11.165-19.465-19.743-27.206c-2.717-2.451-5.583-4.7-8.571-6.748c13.12-2.887,23.804-12.341,28.406-24.734   c4.602,12.393,15.286,21.847,28.406,24.734c-2.988,2.048-5.854,4.297-8.57,6.748C119.346,132.575,112.595,141.88,107.969,152.066z    M71.206,54.436c13.951,0,25.301,11.35,25.301,25.301s-11.35,25.301-25.301,25.301s-25.301-11.35-25.301-25.301   S57.255,54.436,71.206,54.436z M170.218,79.736c0,13.951-11.35,25.301-25.301,25.301s-25.301-11.35-25.301-25.301   s11.35-25.301,25.301-25.301S170.218,65.786,170.218,79.736z M108.041,48.088c-3.04-6.825-7.023-13.231-11.845-19.021h23.699   C115.052,34.867,111.074,41.273,108.041,48.088z M164.562,16.17c2.468,9.767,2.65,20.018,0.566,29.875   c-5.909-3.558-12.824-5.61-20.21-5.61c-7.254,0-14.05,1.983-19.889,5.425c3.327-5.397,7.423-10.367,12.248-14.72   C145.142,24.043,154.479,18.934,164.562,16.17z M51.562,16.17c10.082,2.763,19.419,7.872,27.286,14.97   c4.792,4.324,8.877,9.293,12.205,14.695c-5.83-3.426-12.61-5.401-19.847-5.401c-7.386,0-14.301,2.051-20.21,5.61   C48.912,36.188,49.094,25.937,51.562,16.17z M51.555,120.283c10.084,2.763,19.425,7.873,27.293,14.972   c13.908,12.549,21.704,29.884,21.95,48.812v15.742c-10.093-2.564-21.543-7.294-29.546-14.514   C52.951,168.783,45.553,143.818,51.555,120.283z M144.871,185.295c-7.99,7.21-19.708,11.96-30.073,14.539v-15.766   c0.239-18.349,8.431-36.14,22.478-48.813c7.868-7.1,17.209-12.209,27.293-14.972C170.57,143.818,163.172,168.783,144.871,185.295z" fill="#FFFFFF"/><circle cx="71.206" cy="79.736" r="9.757" fill="#FFFFFF"/><circle cx="144.917" cy="79.736" r="9.757" fill="#FFFFFF"/></g></svg> <span class="pull-left">SleepingOwl</span>',
    'logo_mini' => '<svg style="padding:7px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 216.123 216.123" style="enable-background:new 0 0 216.123 216.123;" xml:space="preserve" width="48px" height="48px"><g><path d="M173.65,106.51c6.549-7.024,10.567-16.436,10.567-26.774c0-8.585-2.775-16.529-7.464-23.001   c5.319-16.633,5.063-34.71-0.795-51.16L173.974,0l-5.827,1.03c-12.002,2.121-23.325,6.931-33.201,14.037H81.537v0.252   C71.577,8.071,60.122,3.176,47.977,1.03L42.149,0l-1.985,5.575c-5.858,16.45-6.114,34.527-0.795,51.16   c-4.689,6.472-7.464,14.417-7.464,23.001c0,10.338,4.018,19.75,10.567,26.773c-1.028,0.797-1.846,1.88-2.308,3.179   c-10.874,30.534-2.352,64.292,21.71,86c1.048,0.945,2.171,1.862,3.332,2.761v10.673c0,3.866,3.134,7,7,7s7-3.134,7-7v-2.194   c8.347,3.957,17.834,6.887,27.532,8.373c0.352,0.054,0.706,0.081,1.06,0.081s0.708-0.027,1.06-0.081   c4.446-0.681,16.123-2.878,28.059-8.434v2.255c0,3.866,3.134,7,7,7s7-3.134,7-7v-10.656c1.139-0.883,2.254-1.805,3.332-2.777   c24.062-21.709,32.583-55.466,21.71-86C175.496,108.389,174.678,107.306,173.65,106.51z M107.969,152.066   c-4.506-10.226-11.165-19.465-19.743-27.206c-2.717-2.451-5.583-4.7-8.571-6.748c13.12-2.887,23.804-12.341,28.406-24.734   c4.602,12.393,15.286,21.847,28.406,24.734c-2.988,2.048-5.854,4.297-8.57,6.748C119.346,132.575,112.595,141.88,107.969,152.066z    M71.206,54.436c13.951,0,25.301,11.35,25.301,25.301s-11.35,25.301-25.301,25.301s-25.301-11.35-25.301-25.301   S57.255,54.436,71.206,54.436z M170.218,79.736c0,13.951-11.35,25.301-25.301,25.301s-25.301-11.35-25.301-25.301   s11.35-25.301,25.301-25.301S170.218,65.786,170.218,79.736z M108.041,48.088c-3.04-6.825-7.023-13.231-11.845-19.021h23.699   C115.052,34.867,111.074,41.273,108.041,48.088z M164.562,16.17c2.468,9.767,2.65,20.018,0.566,29.875   c-5.909-3.558-12.824-5.61-20.21-5.61c-7.254,0-14.05,1.983-19.889,5.425c3.327-5.397,7.423-10.367,12.248-14.72   C145.142,24.043,154.479,18.934,164.562,16.17z M51.562,16.17c10.082,2.763,19.419,7.872,27.286,14.97   c4.792,4.324,8.877,9.293,12.205,14.695c-5.83-3.426-12.61-5.401-19.847-5.401c-7.386,0-14.301,2.051-20.21,5.61   C48.912,36.188,49.094,25.937,51.562,16.17z M51.555,120.283c10.084,2.763,19.425,7.873,27.293,14.972   c13.908,12.549,21.704,29.884,21.95,48.812v15.742c-10.093-2.564-21.543-7.294-29.546-14.514   C52.951,168.783,45.553,143.818,51.555,120.283z M144.871,185.295c-7.99,7.21-19.708,11.96-30.073,14.539v-15.766   c0.239-18.349,8.431-36.14,22.478-48.813c7.868-7.1,17.209-12.209,27.293-14.972C170.57,143.818,163.172,168.783,144.871,185.295z" fill="#FFFFFF"/><circle cx="71.206" cy="79.736" r="9.757" fill="#FFFFFF"/><circle cx="144.917" cy="79.736" r="9.757" fill="#FFFFFF"/></g></svg>',
    'url_prefix' => 'admin',
    'domain' => false,
    'middleware' => 
    array (
      0 => 'web',
      1 => 'root',
    ),
    'env_editor_url' => 'env/editor',
    'env_editor_excluded_keys' => 
    array (
      0 => 'APP_KEY',
      1 => 'DB_*',
    ),
    'env_editor_middlewares' => 
    array (
    ),
    'show_editor' => false,
    'auth_provider' => 'users',
    'bootstrapDirectory' => '/home/alex/www/diplom/app/Admin',
    'imagesUploadDirectory' => 'images/uploads',
    'filesUploadDirectory' => 'files/uploads',
    'template' => 'SleepingOwl\\Admin\\Templates\\TemplateDefault',
    'datetimeFormat' => 'd-m-Y H:i',
    'dateFormat' => 'd-m-Y',
    'timeFormat' => 'H:i',
    'timezone' => 'UTC',
    'wysiwyg' => 
    array (
      'default' => 'ckeditor',
      'ckeditor' => 
      array (
        'defaultLanguage' => 'en',
        'height' => 200,
        'allowedContent' => true,
        'extraPlugins' => 'uploadimage,image2,justify,youtube,uploadfile',
      ),
      'tinymce' => 
      array (
        'height' => 200,
      ),
      'simplemde' => 
      array (
        'hideIcons' => 
        array (
          0 => 'side-by-side',
          1 => 'fullscreen',
        ),
      ),
    ),
    'datatables' => 
    array (
    ),
    'breadcrumbs' => true,
    'aliases' => 
    array (
      'Assets' => 'KodiCMS\\Assets\\Facades\\Assets',
      'PackageManager' => 'KodiCMS\\Assets\\Facades\\PackageManager',
      'Meta' => 'KodiCMS\\Assets\\Facades\\Meta',
      'Form' => 'Collective\\Html\\FormFacade',
      'HTML' => 'Collective\\Html\\HtmlFacade',
      'WysiwygManager' => 'SleepingOwl\\Admin\\Facades\\WysiwygManager',
      'MessagesStack' => 'SleepingOwl\\Admin\\Facades\\MessageStack',
      'AdminSection' => 'SleepingOwl\\Admin\\Facades\\Admin',
      'AdminTemplate' => 'SleepingOwl\\Admin\\Facades\\Template',
      'AdminNavigation' => 'SleepingOwl\\Admin\\Facades\\Navigation',
      'AdminColumn' => 'SleepingOwl\\Admin\\Facades\\TableColumn',
      'AdminColumnEditable' => 'SleepingOwl\\Admin\\Facades\\TableColumnEditable',
      'AdminColumnFilter' => 'SleepingOwl\\Admin\\Facades\\TableColumnFilter',
      'AdminDisplayFilter' => 'SleepingOwl\\Admin\\Facades\\DisplayFilter',
      'AdminForm' => 'SleepingOwl\\Admin\\Facades\\Form',
      'AdminFormElement' => 'SleepingOwl\\Admin\\Facades\\FormElement',
      'AdminDisplay' => 'SleepingOwl\\Admin\\Facades\\Display',
      'AdminWidgets' => 'SleepingOwl\\Admin\\Facades\\Widgets',
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/home/alex/www/diplom/resources/views',
    ),
    'compiled' => '/home/alex/www/diplom/storage/framework/views',
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => '/home/alex/www/diplom/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => false,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'ide-helper' => 
  array (
    'filename' => '_ide_helper',
    'format' => 'php',
    'meta_filename' => '.phpstorm.meta.php',
    'include_fluent' => false,
    'write_model_magic_where' => true,
    'write_eloquent_model_mixins' => false,
    'include_helpers' => false,
    'helper_files' => 
    array (
      0 => '/home/alex/www/diplom/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
    ),
    'model_locations' => 
    array (
      0 => 'app',
    ),
    'extra' => 
    array (
      'Eloquent' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'Illuminate\\Database\\Query\\Builder',
      ),
      'Session' => 
      array (
        0 => 'Illuminate\\Session\\Store',
      ),
    ),
    'magic' => 
    array (
    ),
    'interfaces' => 
    array (
    ),
    'custom_db_types' => 
    array (
    ),
    'model_camel_case_properties' => false,
    'type_overrides' => 
    array (
      'integer' => 'int',
      'boolean' => 'bool',
    ),
    'include_class_docblocks' => false,
  ),
  'breadcrumbs' => 
  array (
    'view' => 'breadcrumbs::bootstrap4',
    'files' => '/home/alex/www/diplom/routes/breadcrumbs.php',
    'unnamed-route-exception' => true,
    'missing-route-bound-breadcrumb-exception' => true,
    'invalid-named-breadcrumb-exception' => true,
    'manager-class' => 'DaveJamesMiller\\Breadcrumbs\\BreadcrumbsManager',
    'generator-class' => 'DaveJamesMiller\\Breadcrumbs\\BreadcrumbsGenerator',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
