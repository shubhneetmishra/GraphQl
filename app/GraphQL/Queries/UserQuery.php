<?php
namespace App\GraphQL\Queries;
use App\Models\User;
class UserQuery
{
    public function paginate($root, array $args){
        return User::Query()->paginate(
            $args['count'],
            ['*'],
            'page',
            $args['page']
        );
    }
    public function user($root, array $args){
        return User::Query()->where('remember_token',0)->get();
        
    }
}