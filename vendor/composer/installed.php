<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'a7d47cd4b173d8fcf2336b892c575b5e2a5b0439',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'a7d47cd4b173d8fcf2336b892c575b5e2a5b0439',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'components/jquery' => array(
            'pretty_version' => 'v3.7.1',
            'version' => '3.7.1.0',
            'reference' => '8edc7785239bb8c2ad2b83302b856a1d61de60e7',
            'type' => 'component',
            'install_path' => __DIR__ . '/../components/jquery',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v5.3.2',
            'version' => '5.3.2.0',
            'reference' => '344e912d04b5b6a04482113eff20ab416ff01048',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v5.3.2',
            ),
        ),
    ),
);
