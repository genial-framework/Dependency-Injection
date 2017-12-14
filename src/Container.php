<?php
/*
 * @link      <https://github.com/Genial-Framework/Dependency-Injection> for the canonical source repository
 * @copyright Copyright (c) 2017-2018 Genial Framework. <https://github.com/Genial-Framework>
 * @license   <https://github.com/Genial-Framework/Dependency-Injection/blob/master/LICENSE> New BSD License
 */

namespace Genial\Dependency_Injection;

use SplObjectStorage;
use ArrayAccess;

/**
 * Container.
 */
class Container implements ArrayAccess
{
   
    /**
     * @var object|\SplObjectStorage $dependents
     */
    private $dependents;
    
    /**
     * __construct()
     *
     * Initialize a new container
     *
     * @return void
     */
    public function __construct()
    {
        $this->dependents = new \SplObjectStorage();
      
    }
  
}
