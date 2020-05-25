<?php
namespace extas\components\quality\users;

use extas\components\repositories\Repository;
use extas\interfaces\quality\users\IUserRepository;

/**
 * Class UserRepository
 *
 * @package extas\components\quality\users
 * @author jeyroik@gmail.com
 */
class UserRepository extends Repository implements IUserRepository
{
    protected string $scope = 'extas';
    protected string $pk = User::FIELD__NAME;
    protected string $name = 'quality_users';
    protected string $itemClass = User::class;
}
