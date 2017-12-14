<?php
/*
 * @link      <https://github.com/Genial-Framework/Dependency-Injection> for the canonical source repository
 * @copyright Copyright (c) 2017-2018 Genial Framework. <https://github.com/Genial-Framework>
 * @license   <https://github.com/Genial-Framework/Dependency-Injection/blob/master/LICENSE> New BSD License
 */

namespace Genial\Dependency_Injection;

use ArrayAccess;

/**
 * Container.
 */
class Container implements ArrayAccess
{
    /**
     * @var object|\SplObjectStorage
     */
    private $dependents;

    /**
     * @var array|[]
     */
    private $keys = [];

    /**
     * __construct().
     *
     * Initialize a new container
     *
     * @return void
     */
    public function __construct()
    {
        $this->dependents = new \SplObjectStorage();
    }

    /**
     * offsetExists().
     *
     * Check to see if a parameter or an object is set
     *
     * @param string $id The unique identifier for the parameter or object
     *
     * @return void
     */
    public function offsetExists($id)
    {
        return isset($this->keys[$id]);
    }
}
