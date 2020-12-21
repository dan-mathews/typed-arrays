<?php

declare(strict_types = 1);

namespace TypedArrays\IntToValueArrays;

use TypedArrays\KeyToValueArray;
use TypedArrays\Validators\IntValidator;
use TypedArrays\Validators\IValidate;

class IntToIntArray extends KeyToValueArray
{
    /**
     * @param int $key
     * @param int $value
     */
    public function setItem(int $key, int $value): void
    {
        $this->items[$key] = $value;
    }

    public function unsetItem(int $key): void
    {
        unset($this->items[$key]);
    }

    public function pushItem(int $value): void
    {
        array_push($this->items, $value);
    }

    protected function getKeyValidator(): IValidate
    {
        return new IntValidator();
    }

    protected function getValueValidator(): IValidate
    {
        return new IntValidator();
    }
}
