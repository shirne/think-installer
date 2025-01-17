<?php

namespace shirne\composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $manager = $composer->getInstallationManager();

        //框架核心
        $manager->addInstaller(new ThinkFramework($io, $composer));

        //单元测试
        $manager->addInstaller(new ThinkTesting($io, $composer));

        //扩展
        $manager->addInstaller(new ThinkExtend($io, $composer));
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {

    }

    public function uninstall(Composer $composer, IOInterface $io)
    {

    }
}
