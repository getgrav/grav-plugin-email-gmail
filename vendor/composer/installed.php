<?php return array(
    'root' => array(
        'name' => 'getgrav/email-gmail',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'grav-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'getgrav/email-gmail' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
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
            'pretty_version' => 'v5.4.8',
            'version' => '5.4.8.0',
            'reference' => '8da892489a7536e869c56efa06bf2f74f15a4693',
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
