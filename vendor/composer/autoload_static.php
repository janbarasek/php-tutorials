<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ba19ab0d42bef5501be112e3830b096
{
    public static $files = array (
        '7745382c92b7799bf1294b1f43023ba2' => __DIR__ . '/..' . '/tracy/tracy/src/shortcuts.php',
    );

    public static $classMap = array (
        'Tracy\\Bar' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Bar.php',
        'Tracy\\BlueScreen' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/BlueScreen.php',
        'Tracy\\Bridges\\Nette\\Bridge' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/Bridge.php',
        'Tracy\\Bridges\\Nette\\MailSender' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/MailSender.php',
        'Tracy\\Bridges\\Nette\\TracyExtension' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/TracyExtension.php',
        'Tracy\\Debugger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Debugger.php',
        'Tracy\\DefaultBarPanel' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/DefaultBarPanel.php',
        'Tracy\\Dumper' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper.php',
        'Tracy\\FireLogger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/FireLogger.php',
        'Tracy\\Helpers' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Helpers.php',
        'Tracy\\IBarPanel' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/IBarPanel.php',
        'Tracy\\ILogger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/ILogger.php',
        'Tracy\\Logger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Logger.php',
        'Tracy\\OutputDebugger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/OutputDebugger.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6ba19ab0d42bef5501be112e3830b096::$classMap;

        }, null, ClassLoader::class);
    }
}
