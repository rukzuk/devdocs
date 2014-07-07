<?php

return new Sami\Sami(__DIR__.'/../build/stubs', array(
    'theme'                => 'rukzuk_rst',
    'title'                => 'rukzuk API',
    'build_dir'            => __DIR__.'/../build/php',
    'cache_dir'            => __DIR__.'/../build/cache',
	'template_dirs'        => array(__DIR__.'/../src/sami/resources/themes'),
    'default_opened_level' => 2,
));