<?php
// src/Model/Table/ArticlesTable.php

namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
      $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
      $validator
        ->notEmpty('title')
        ->requirePresence('title')
        ->notEmpty('content')
        ->requirePresence('content');

        return $validator;
    }

    public function isOwnedBy($post,$user)
    {
      return $this->field('id',array('id'=>$post , 'user_id'=>$user)) !== false;
    }
}


 ?>
