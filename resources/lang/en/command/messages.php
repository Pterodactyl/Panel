<?php

return [
    'key' => [
        'warning' => 'It appears you have already configured an application encryption key. Continuing with this process with overwrite that key and cause data corruption for any existing encrypted data. DO NOT CONTINUE UNLESS YOU KNOW WHAT YOU ARE DOING.',
        'confirm' => 'I understand the consequences of performing this command and accept all responsibility for the loss of encrypted data.',
        'final_confirm' => 'Are you sure you wish to continue? Changing the application encryption key WILL CAUSE DATA LOSS.',
    ],
    'location' => [
        'no_location_found' => 'Could not locate a record matching the provided short code.',
        'ask_short' => 'Location Short Code',
        'ask_long' => 'Location Description',
        'created' => 'Successfully created a new location (:name) with an ID of :id.',
        'deleted' => 'Successfully deleted the requested location.',
    ],
    'user' => [
        'search_users' => 'Enter a Username, UUID, or Email Address',
        'select_search_user' => 'ID of user to delete (Enter \'0\' to re-search)',
        'deleted' => 'User successfully deleted from the Panel.',
        'confirm_delete' => 'Are you sure you want to delete this user from the Panel?',
        'no_users_found' => 'No users were found for the search term provided.',
        'multiple_found' => 'Multiple accounts were found for the user provided, unable to delete a user because of the --no-interaction flag.',
        'ask_admin' => 'Is this user an administrator?',
        'ask_email' => 'Email Address',
        'ask_username' => 'Username',
        'ask_name_first' => 'First Name',
        'ask_name_last' => 'Last Name',
        'ask_password' => 'Password',
        'ask_password_tip' => 'If you would like to create an account with a random password emailed to the user, re-run this command (CTRL+C) and pass the `--no-password` flag.',
        'ask_password_help' => 'Passwords must be at least 8 characters in length and contain at least one capital letter and number.',
        '2fa_help_text' => [
            'This command will disable 2-factor authentication for a user\'s account if it is enabled. This should only be used as an account recovery command if the user is locked out of their account.',
            'If this is not what you wanted to do, press CTRL+C to exit this process.',
        ],
        '2fa_disabled' => '2-Factor authentication has been disabled for :email.',
    ],
    'schedule' => [
        'output_line' => 'Dispatching job for first task in `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Deleting service backup file :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Rebuild request for ":name" (#:id) on node ":node" failed with error: :message',
        'power' => [
            'confirm' => 'You are about to perform a :action against :count servers. Do you wish to continue?',
            'action_failed' => 'Power action request for ":name" (#:id) on node ":node" failed with error: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Host (e.g. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Port',
            'ask_smtp_username' => 'SMTP Username',
            'ask_smtp_password' => 'SMTP Password',
            'ask_mailgun_domain' => 'Mailgun Domain',
            'ask_mailgun_secret' => 'Mailgun Secret',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => 'Which driver should be used for sending emails?',
            'ask_mail_from' => 'Email address emails should originate from',
            'ask_mail_name' => 'Name that emails should appear from',
            'ask_encryption' => 'Encryption method to use',
        ],
        'database' => [
            'host_warning' => 'It is highly recommended to not use "localhost" as your database host as we have seen frequent socket connection issues. If you want to use a local connection you should be using "127.0.0.1".',
            'host' => 'Database Host',
            'port' => 'Database Port',
            'database' => 'Database Name',
            'username_warning' => 'Using the "root" account for MySQL connections is not only highly frowned upon, it is also not allowed by this application. You\'ll need to have created a MySQL user for this software.',
            'username' => 'Database Username',
            'password_defined' => 'It appears you already have a MySQL connection password defined, would you like to change it?',
            'password' => 'Database Password',
            'connection_error' => 'Unable to connect to the MySQL server using the provided credentials. The error returned was ":error".',
            'creds_not_saved' => 'Your connection credentials have NOT been saved. You will need to provide valid connection information before proceeding.',
            'try_again' => 'Go back and try again?',
        ],
        'app' => [
            'settings' => 'Enable UI based settings editor?',
            'author' => 'Egg Author Email',
            'author_help' => 'Provide the email address that eggs exported by this Panel should be from. This should be a valid email address.',
            'app_url_help' => 'The application URL MUST begin with https:// or http:// depending on if you are using SSL or not. If you do not include the scheme your emails and other content will link to the wrong location.',
            'app_url' => 'Application URL',
            'timezone_help' => 'The timezone should match one of PHP\'s supported timezones. If you are unsure, please reference http://php.net/manual/en/timezones.php.',
            'timezone' => 'Application Timezone',
            'cache_driver' => 'Cache Driver',
            'session_driver' => 'Session Driver',
            'queue_driver' => 'Queue Driver',
            'using_redis' => 'You\'ve selected the Redis driver for one or more options, please provide valid connection information below. In most cases you can use the defaults provided unless you have modified your setup.',
            'redis_host' => 'Redis Host',
            'redis_password' => 'Redis Password',
            'redis_pass_help' => 'By default a Redis server instance has no password as it is running locally and inaccessible to the outside world. If this is the case, simply hit enter without entering a value.',
            'redis_port' => 'Redis Port',
            'redis_pass_defined' => 'It seems a password is already defined for Redis, would you like to change it?',
        ],
        'oauth2' => [
            'oauth2_warning' => 'OAuth2 configuration is an advanced feature, only use if you know what you are doing.',
            'clientId' => 'OAuth2 Client ID',
            'clientSecret' => 'OAuth2 Secret Key',
            'urlAuthorize' => 'OAuth2 Authorize URL',
            'urlAccessToken' => 'OAuth2 Access Token URL',
            'urlResourceOwnerDetails' => 'OAuth2 User Info URL.',
            'urlRevoke' => 'OAuth2 Revoke URL.',
            'ask_proxy' => 'Would you like to use a proxy for OAuth2?',
            'proxy' => 'Proxy URL And Port (IP:port).',
            'resource_keys_help' => 'If you do not know which resource keys are used by your OAuth2 server check their docs or ask your provider.',
            'id' => 'ID OAuth2 Resource Key',
            'username' => 'Username OAuth2 Resource Key',
            'email' => 'Email OAuth2 Resource Key',
            'ask_first_name' => 'Does your OAuth2 server/provider provide the user\'s first name?',
            'first_name' => 'First Name OAuth2 Resource Key',
            'ask_last_name' => 'Does your OAuth2 server/provider provide the user\'s last name?',
            'last_name' => 'Last Name OAuth2 Resource Key',
            'scopes' => 'OAuth2 Authorization Scopes (Separated by \',\')',
            'create_user' => 'Would you like to only allow users with an account to login or create one if the user doesn\'t have one?',
            'create_user_options' => [
                'only_allow_login' => 'Only allow users with an existing account',
                'create' => 'Create a new user',
            ],
            'create_user_warning' => [
                'only_allow_login' => 'You will have to create users with an OAuth2 ID from the admin page or convert existing accounts.',
                'create' => 'Having a private OAuth2 server or a private app is recommended as this feature does not prevent anyone from logging in thru OAuth2.',
            ],
            'update_user' => 'Would you like to update the user\'s details using the OAuth2 resources after each login using?',
            'setup_finished' => [
                'OAuth2 has been setup, if you wish to disable it remove \'OAUTH2_CLIENT_ID\' from your ENV file.',
                'If you wish to disable the proxy (if set) remove \'OAUTH2_URL_PROXY_URL\' from your ENV file.',
                'To test it please logout from the panel and login through the new OAuth button.',
            ],
            'redirect_uri_warning' => 'Please set the redirect URI as \'' . env('APP_URL') . '/auth/login/oauth2/callback' . '\' on your OAuth2 server/provider.',
            'not_official' => 'This is not an official feature, please contact jer3m01#0001 on discord for help.',
        ],
    ],
];
