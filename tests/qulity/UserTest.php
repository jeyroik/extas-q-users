<?php
namespace tests\quality;

use extas\components\quality\users\User;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

/**
 * Class UserTest
 *
 * @package tests\quality
 * @author jeyroik <jeyroik@gmail.com>
 */
class UserTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $env = Dotenv::create(getcwd() . '/tests/');
        $env->load();
    }

    public function testBasicMethods()
    {
        $user = new User();
        $user->setBugsSum(1)
            ->setIssuesBVSum(2)
            ->setIssuesDoneSum(1)
            ->setIssuesReturnsCount(1)
            ->setTimeSpentSum(86400);

        $index = $user->getQualificationIndex();
        $this->assertEquals(10,$index);
        $this->asserTEquals(1, $user->getBugsSum());
    }
}
