<?php

namespace React\Promise\PromiseTest;

/**
 * @template T
 */
trait FullTestTrait
{
    /**
     * @use PromiseSettledTestTrait<T>
     * @use PromiseFulfilledTestTrait<T>
     */
    use PromisePendingTestTrait,
        PromiseSettledTestTrait,
        PromiseFulfilledTestTrait,
        PromiseRejectedTestTrait,
        ResolveTestTrait,
        RejectTestTrait,
        CancelTestTrait;
}
