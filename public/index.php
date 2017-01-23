<?php

require __DIR__.'/../vendor/autoload.php';

B2\App::security_assert();

B2\Dev\Site::instance()
    ->debug()
    ->access_public()
    ->reg(\B2\FlatFileBlog::class, '/blog')
    ->run();
