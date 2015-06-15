<?php

class Session
{

  /**
   * 
   * @var string $Account
   * @access public
   */
  public $Account = null;

  /**
   * 
   * @var string $Password
   * @access public
   */
  public $Password = null;

  /**
   * 
   * @param string $Account
   * @param string $Password
   * @access public
   */
  public function __construct($Account, $Password)
  {
    $this->Account = $Account;
    $this->Password = $Password;
  }

}
