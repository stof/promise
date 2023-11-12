<?php

namespace React\Promise\PromiseAdapter;

use React\Promise\PromiseInterface;

/**
 * @template T
 */
interface PromiseAdapterInterface
{
    /**
     * @return PromiseInterface<T>
     */
    public function promise(): PromiseInterface;

    /**
     * @param mixed $value
     */
    public function resolve($value): void;
    public function reject(\Throwable $reason): void;

    /**
     * @param mixed $value
     */
    public function settle($value): void;
}
