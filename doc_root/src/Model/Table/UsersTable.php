<?php
// src /Model/Table/UsersTable.
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function validationDefault(Validator $validator)
    {
      return $validator
        ->notEmpty('username','ユーザー名が入力されていません')
        ->notEmpty('password','パスワードが入力されていません')
        ->notEmpty('role','役割が入力されていません')
        ->add('role','inList',[
          'rule' => [ 'inList' , [ 'admin' , 'author' ] ],
          'message' => '有効な役割を入力してください'
        ]);
    }
}

?>
