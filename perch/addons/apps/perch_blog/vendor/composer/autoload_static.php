<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c49bd0bf2049d98137cbe06945f7bd6
{
    public static $files = array (
        '757772e28a0943a9afe83def8db95bdf' => __DIR__ . '/..' . '/mf2/mf2/Mf2/Parser.php',
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'IndieWeb' => 
            array (
                0 => __DIR__ . '/..' . '/indieweb/mention-client/src',
            ),
        ),
    );

    public static $classMap = array (
        'IndieWeb\\MentionClient' => __DIR__ . '/..' . '/indieweb/mention-client/src/IndieWeb/MentionClient.php',
        'IndieWeb\\MentionClientTest' => __DIR__ . '/..' . '/indieweb/mention-client/src/IndieWeb/MentionClientTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit9c49bd0bf2049d98137cbe06945f7bd6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9c49bd0bf2049d98137cbe06945f7bd6::$classMap;

        }, null, ClassLoader::class);
    }
}