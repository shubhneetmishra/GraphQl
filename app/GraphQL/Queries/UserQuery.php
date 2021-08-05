<?php
namespace App\GraphQL\Queries;
use App\Models\User;
class UserQuery
{
    public function paginate($root, array $args=null){

        
       
        if($args['name']){
            $user=User::Query()->where('name',$args['name'])->paginate(
                $args['count'],
                ['*'],
                'page',
                $args['page']
            ); 
        }
        else if($args['count'] &&  $args['page']){
            $user=User::Query()->paginate(
                $args['count'],
                ['*'],
                'page',
                $args['page']
            );
        }
        else{
            $user=User::Query()->get();
        }
        return $user;
    }
    public function user($root, array $args){
        return User::Query()->where('remember_token',0)->get();
        
    }
}