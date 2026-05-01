<?php return array(
    'root' => array(
        'name' => 'getgrav/email-gmail',
        'pretty_version' => 'dev-develop',
        'version' => 'dev-develop',
        'reference' => '6a7eec1964344e5d09de4d5d952af5109d0771b4',
        'type' => 'grav-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'getgrav/email-gmail' => array(
            'pretty_version' => 'dev-develop',
            'version' => 'dev-develop',
            'reference' => '6a7eec1964344e5d09de4d5d952af5109d0771b4',
            'type' => 'grav-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/event-dispatcher' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/google-mailer' => array(
            'pretty_version' => 'v5.4.35',
            'version' => '5.4.35.0',
            'reference' => '6d7191a30fd2ae0ab740a93cfbf7fba64834aed6',
            'type' => 'symfony-mailer-bridge',
            'install_path' => __DIR__ . '/../symfony/google-mailer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/mailer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
