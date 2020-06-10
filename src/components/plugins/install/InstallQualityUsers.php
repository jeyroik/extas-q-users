<?php
namespace extas\components\plugins\install;

use extas\components\quality\users\User;

/**
 * Class InstallQualityUsers
 *
 * @package extas\components\plugins\install
 * @author jeyroik@gmail.com
 */
class InstallQualityUsers extends InstallSection
{
    protected string $selfItemClass = User::class;
    protected string $selfName = 'quality user';
    protected string $selfSection = 'quality_users';
    protected string $selfRepositoryClass = 'qualityUserRepository';
    protected string $selfUID = User::FIELD__NAME;
}
