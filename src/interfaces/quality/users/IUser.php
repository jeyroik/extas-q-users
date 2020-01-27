<?php
namespace extas\interfaces\quality\users;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;

/**
 * Interface IUser
 *
 * @package extas\interfaces\quality\users
 * @author jeyroik@gmail.com
 */
interface IUser extends IItem, IHasName, IHasDescription
{
    const SUBJECT = 'extas.quality.user';

    const FIELD__ISSUES_BUSINESS_VALUE_SUM = 'issues_business_value_sum';
    const FIELD__ISSUES_DONE_SUM = 'issues_done_sum';
    const FIELD__BUGS_SUM = 'bugs_sum';
    const FIELD__TIME_SPENT_SUM = 'time_spent_sum';

    /**
     * @return int
     */
    public function getQualificationIndex(): int;

    /**
     * @return int
     */
    public function getIssuesBVSum(): int;

    /**
     * @return int
     */
    public function getIssuesDoneSum(): int;

    /**
     * @return int
     */
    public function getBugsSum(): int;

    /**
     * @return int
     */
    public function getTimeSpentSum(): int;

    /**
     * @param int $bvSum
     *
     * @return IUser
     */
    public function setIssuesBVSum(int $bvSum): IUser;

    /**
     * @param int $doneSum
     *
     * @return IUser
     */
    public function setIssuesDoneSum(int $doneSum): IUser;

    /**
     * @param int $bugsSum
     *
     * @return IUser
     */
    public function setBugsSum(int $bugsSum): IUser;

    /**
     * @param int $timeSpentSum
     *
     * @return IUser
     */
    public function setTimeSpentSum(int $timeSpentSum): IUser;
}
