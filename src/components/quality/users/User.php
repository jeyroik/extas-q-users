<?php
namespace extas\components\quality\users;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\interfaces\quality\users\IUser;

/**
 * Class User
 *
 * @package extas\components\quality\users
 * @author jeyroik@gmail.com
 */
class User extends Item implements IUser
{
    use THasName;
    use THasDescription;

    protected const DAY = 86400;

    /**
     * @return int
     */
    public function getQualificationIndex(): int
    {
        $indexRaw = ($this->getIssuesBVSum() + $this->getIssuesDoneSum()) /
        (1 + $this->getIssuesReturnsCount() + $this->getTimeSpentSum()/static::DAY);

        return (int) round($indexRaw)*10;
    }

    /**
     * @return int
     */
    public function getIssuesBVSum(): int
    {
        return $this->config[static::FIELD__ISSUES_BUSINESS_VALUE_SUM] ?? 0;
    }

    /**
     * @return int
     */
    public function getIssuesDoneSum(): int
    {
        return $this->config[static::FIELD__ISSUES_DONE_SUM] ?? 0;
    }

    /**
     * @return int
     */
    public function getBugsSum(): int
    {
        return $this->config[static::FIELD__BUGS_SUM] ?? 0;
    }

    /**
     * @return int
     */
    public function getIssuesReturnsCount(): int
    {
        return $this->config[static::FIELD__ISSUES_RETURNS] ?? 0;
    }

    /**
     * @return int
     */
    public function getTimeSpentSum(): int
    {
        return $this->config[static::FIELD__TIME_SPENT_SUM] ?? 0;
    }

    /**
     * @param int $bvSum
     *
     * @return IUser
     */
    public function setIssuesBVSum(int $bvSum): IUser
    {
        $this->config[static::FIELD__ISSUES_BUSINESS_VALUE_SUM] = $bvSum;

        return $this;
    }

    /**
     * @param int $doneSum
     *
     * @return IUser
     */
    public function setIssuesDoneSum(int $doneSum): IUser
    {
        $this->config[static::FIELD__ISSUES_DONE_SUM] = $doneSum;

        return $this;
    }

    /**
     * @param int $bugsSum
     *
     * @return IUser
     */
    public function setBugsSum(int $bugsSum): IUser
    {
        $this->config[static::FIELD__BUGS_SUM] = $bugsSum;

        return $this;
    }

    /**
     * @param int $returnsCount
     *
     * @return IUser
     */
    public function setIssuesReturnsCount(int $returnsCount): IUser
    {
        $this->config[static::FIELD__ISSUES_RETURNS] = $returnsCount;

        return $this;
    }

    /**
     * @param int $timeSpentSum
     *
     * @return IUser
     */
    public function setTimeSpentSum(int $timeSpentSum): IUser
    {
        $this->config[static::FIELD__TIME_SPENT_SUM] = $timeSpentSum;

        return $this;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
