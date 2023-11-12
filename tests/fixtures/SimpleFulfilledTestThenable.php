<?php

namespace React\Promise;

class SimpleFulfilledTestThenable
{
    /**
     * @param (callable(string):void)|null $onFulfilled
     * @param (callable(\Throwable):void)|null $onRejected
     */
    public function then(callable $onFulfilled = null, callable $onRejected = null): self
    {
        if ($onFulfilled) {
            $onFulfilled('foo');
        }

        return new self();
    }
}
