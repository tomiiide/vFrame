<?php
/**
 * @author
 * Created by victor.
 * A.I. engineer & Software developer
 * javafolabi@gmail.com
 * On 07 06, 2017 @ 3:30 PM
 * Copyright victor © 2017. All rights reserved.
 */

namespace App\Libs\Classes;


class Generators
{


  /**
   * Hash a password using PASSWORD_BCRYPT default algorithm
   *
   * @credits Victor I. Afolabi <javafolabi@gmail.com>
   * @param $password
   * @param int $algorithm
   * @return bool|string
   */
  function hash($password, $algorithm = PASSWORD_BCRYPT)
  {
    return password_hash($password, $algorithm);
  }


  /**
   * Verifies hashed password
   *
   * @credits Victor I. Afolabi <javafolabi@gmail.com>
   * @param $password
   * @param $hash
   * @return bool
   */
  function verifyHash($password, $hash)
  {
    return password_verify($password, $hash);
  }

  /**
   * Generates random mixed case string
   *
   * @credits Victor I. Afolabi <javafolabi@gmail.com>
   * @param int $length
   * @return string
   */
  function generateId($length = 8)
  {
    $chars = array_merge(range('A', 'Z'), range(0, 9), range('a', 'z'));
    shuffle($chars);
    if ($length > count($chars)) $length = count($chars);
    return implode(array_slice($chars, 0, $length));
  }

  /**
   * Generates a random salt
   *
   * @credits Victor I. Afolabi <javafolabi@gmail.com>
   * @param $name
   * @param int $algorithm
   * @return bool|string
   */
  function generateSalt($name, $algorithm = PASSWORD_BCRYPT)
  {
    return _hash($name, $algorithm);
  }

  /**
   * Verifies a salt
   *
   * @credits Victor I. Afolabi <javafolabi@gmail.com>
   * @param $name
   * @param $salt
   * @return bool
   */
  function verifySalt($name, $salt)
  {
    return password_verify($name, $salt);
  }

  /**
   * Generates md5 hash [Same random hash sequence]
   *
   * @credits Victor I. Afolabi <javafolabi@gmail.com>
   * @param $name
   * @param bool $raw_output
   * @return string
   */
  function generateMD5($name, $raw_output=True)
  {
    return md5($name, $raw_output);
  }

}