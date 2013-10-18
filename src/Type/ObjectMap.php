<?php

namespace PHPocket\Type;

use PHPocket\Common\CollectionInterface;
use PHPocket\Common\EqualsInterface;
use Traversable;

class ObjectMap implements
    \IteratorAggregate,
    CustomTypeInterface,
    EqualsInterface
{

    /**
     * Array keys
     * @var array
     */
    protected $_keys = array();

    /**
     * Array values
     * @var array
     */
    protected $_values = array();

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     */
    public function getIterator()
    {
        return $this->valuesIterator();
    }

    /**
     * Returns iterator for collection's values
     *
     * @return \ArrayIterator
     */
    public function valuesIterator()
    {
        return new \ArrayIterator($this->_values);
    }

    /**
     * Returns iterator for collection's keys
     *
     * @return \ArrayIterator
     */
    public function keysIterator()
    {
        return new \ArrayIterator($this->_keys);
    }

    /**
     * Compares itself to $object and return true if
     * contents are equal
     *
     * @param mixed $object Object to compare
     * @return mixed
     */
    public function equals($object)
    {
        if (!($object instanceof ObjectMap)) {
            return false;
        }
        /** @var ObjectMap $object */
        if ($this->count() != $object->count()) {
            return false;
        }

        throw new \Exception('Not implemented');
    }

    public function count()
    {
        return count($this->_keys);
    }

}