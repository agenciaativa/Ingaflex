<?php
/**
 * Created by PhpStorm.
 * User: ativa
 * Date: 15/08/17
 * Time: 11:40
 */

namespace Ingaflex\Repositories;

use \Ingaflex\Entities\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UsuariosRepositoryEloquent extends BaseRepository implements UsuariosRepository
{
    public function model()
    {
        return User::class;
    }

    public function isLogged($userID)
    {
        if (count($this->findWhere(['id' => $userID])) == false) {
            return true;
        } else {
            return false;
        }

    }
}