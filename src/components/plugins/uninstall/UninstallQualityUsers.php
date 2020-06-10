<?php
namespace extas\components\plugins\uninstall;

use extas\components\quality\users\User;

/**
 * Class UninstallQualityUsers
 *
 * @package extas\components\plugins\uninstall
 * @author jeyroik@gmail.com
 */
class UninstallQualityUsers extends UninstallSection
{
    protected string $selfItemClass = User::class;
    protected string $selfName = 'quality user';
    protected string $selfSection = 'quality_users';
    protected string $selfRepositoryClass = 'qualityUserRepository';
    protected string $selfUID = User::FIELD__NAME;
}
