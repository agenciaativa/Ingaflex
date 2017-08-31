<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 17/08/17
 * Time: 10:45
 */

namespace Ingaflex\Oauth;

use Auth;

class Verifier
{
    /**
     * @param $username
     * @param $password
     * @return bool
     */
    public function verify($username, $password)
    {
        $credentials = [
            'email' => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}