<?php
declare(strict_types=1);

namespace parallel;


use RuntimeException;

/**
 * Interface Future
 * @package parallel
 * @link https://www.php.net/manual/en/class.parallel-future.php
 */
final class Future
{
    private const EXCEPTION_MESSAGE = 'You should not autoload or include file `Future.php`! This file exists only for IDE auto complete function.';

    /**
     * Shall return (and if necessary wait for) return from task.
     *
     * @return mixed
     */
    public function value()
    {
        throw new RuntimeException(self::EXCEPTION_MESSAGE);
    }

    /**
     * Shall indicate if the task was cancelled.
     *
     * @return bool
     */
    public function cancelled(): bool
    {
        throw new RuntimeException(self::EXCEPTION_MESSAGE);
    }

    /**
     * Shall indicate if the task is completed.
     *
     * @return bool
     */
    public function done(): bool
    {
        throw new RuntimeException(self::EXCEPTION_MESSAGE);
    }

    /**
     *  Shall try to cancel the task. If task is running, it will be interrupted.
     *
     * @return bool
     */
    public function cancel(): bool
    {
        throw new RuntimeException(self::EXCEPTION_MESSAGE);
    }
}
