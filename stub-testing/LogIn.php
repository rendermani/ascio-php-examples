<?php

class LogIn
{

  /**
   * 
   * @var Session $session
   * @access public
   */
  public $session = null;

  /**
   * 
   * @param Session $session
   * @access public
   */
  public function __construct($session)
  {
    $this->session = $session;
  }

}
