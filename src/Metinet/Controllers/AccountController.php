<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 10:47
 */

namespace Metinet\Controllers;


use Metinet\Domain\Account\Account;
use Metinet\Core\Http\Request;
use Metinet\Core\Http\Response;
use Metinet\Core\Templating\PhpViewRenderer;

class AccountController
{
    public function register(Request $request): Response
    {
        $account = new Account($request->getQuery()->get('email', 'Anonyme'),$request->getQuery()->get('mot_de_passe', 'Anonyme'))
        $sql = 'INSERT INTO account (id, email, mot_de_passe) VALUES ('.$account->getId().','.$account->getEmail().','.$account->getMotDePasse().')';

        return new Response("<p>Compte crée avec succès</p>");
    }

    public function login(Request $request): Response
    {
        $account = Account::getUser($request->getQuery()->get('email'));
        if($account->verifyPassword()){
            $account->login();
        }
    }
}