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
    protected $selfItemClass = User::class;
    protected $selfName = 'quality user';
    protected $selfSection = 'quality_users';
    protected $selfRepositoryClass = IUserRepository::class;
    protected $selfUID = User::FIELD__NAME;
}
