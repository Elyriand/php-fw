<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 14:12
 */

namespace Metinet\Domain\Account;


interface AccountRepository
{
    public function save(Account $account): void;
    public function get($id): Account;
}