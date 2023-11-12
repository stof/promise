<?php

namespace React\Promise\PromiseAdapter;

use React\Promise\PromiseInterface;

/**
 * @template T
 * @template-implements PromiseAdapterInterface<T>
 */
class CallbackPromiseAdapter implements PromiseAdapterInterface
{
    /** @var array{promise: callable(): PromiseInterface<T>, resolve: callable(T): void, reject: callable(\Throwable): void, settle: callable(T): void} */
    private $callbacks;

    /**
     * @param array{promise: callable(): PromiseInterface<T>, resolve: callable(T): void, reject: callable(\Throwable): void, settle: callable(T): void} $callbacks
     */
    public function __construct(array $callbacks)
    {
        $this->callbacks = $callbacks;
    }

    /**
     * @return PromiseInterface<T>
     */
    public function promise(): PromiseInterface
    {
        return ($this->callbacks['promise'])(...func_get_args());
    }

    public function resolve($value): void
    {
        ($this->callbacks['resolve'])(...func_get_args());
    }

    public function reject(\Throwable $reason): void
    {
        ($this->callbacks['reject'])(...func_get_args());
    }

    public function settle($value): void
    {
        ($this->callbacks['settle'])(...func_get_args());
    }
}
