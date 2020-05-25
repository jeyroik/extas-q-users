<?php
namespace extas\components\plugins;

use extas\components\quality\users\User;
use extas\interfaces\quality\users\IUserRepository;

/**
 * Class PluginInstallQualityUsers
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallQualityUsers extends PluginInstallDefault
{
    protected string $selfItemClass = User::class;
    protected string $selfName = 'quality user';
    protected string $selfSection = 'quality_users';
    protected string $selfRepositoryClass = IUserRepository::class;
    protected string $selfUID = User::FIELD__NAME;
}
