<?php
// src/Model/Entity/User.php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

Class User extends Entity
{
  protected $_accessible = [
    '*' => true,
    'id' => false
  ];

  protected function _setPassword($password)
  {
    return (new DefaultPasswordHasher)->hash($password);
  }
}

?>
