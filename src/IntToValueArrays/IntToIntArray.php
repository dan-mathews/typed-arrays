<?php

declare(strict_types = 1);

namespace TypedArrays\IntToValueArrays;

class IntToIntArray extends IntToValueArray
{
    public function setItem(int $key, int $value): void
    {
        $this->items[$key] = $value;
    }

    public function pushItem(int $value): void
    {
        array_push($this->items, $value);
    }

    /**
     * @param int $key
     * @param int $value
     * @throws \TypeError
     *
     * Implements ArrayAccess so cannot add param type:
     * @noinspection PhpMissingParamTypeInspection
     */
    public function offsetSet($key, $value): void
    {
        if(!is_int($key)){
            throw new \TypeError('An attempt was made to set a non-integer key on a typed array with integer keys');
        }

        if(!is_int($value)){
            throw new \TypeError('An attempt was made to set a non-integer value on a typed array with integer values');
        }

        $this->setItem($key, $value);
    }
}
