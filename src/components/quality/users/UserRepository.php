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
    protected $idAs = '';
    protected $scope = 'extas';
    protected $pk = User::FIELD__NAME;
    protected $name = 'quality_users';
    protected $itemClass = User::class;
}
