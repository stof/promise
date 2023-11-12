<?php

namespace React\Promise;

class SimpleTestCancellableThenable
{
    /** @var bool */
    public $cancelCalled = false;

    /** @var ?callable():void */
    public $onCancel;

    /**
     * @param (callable():void)|null $onCancel
     */
    public function __construct(callable $onCancel = null)
    {
        $this->onCancel = $onCancel;
    }

    /**
     * @param (callable(mixed):void)|null $onFulfilled
     * @param (callable(\Throwable):void)|null $onRejected
     */
    public function then(callable $onFulfilled = null, callable $onRejected = null): self
    {
        return new self();
    }

    public function cancel(): void
    {
        $this->cancelCalled = true;

        if (is_callable($this->onCancel)) {
            ($this->onCancel)();
        }
    }
}
