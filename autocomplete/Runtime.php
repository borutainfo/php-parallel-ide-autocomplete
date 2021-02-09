<?php
declare(strict_types=1);

namespace parallel;


use RuntimeException;

/**
 * Interface Runtime
 * @package parallel
 * @link https://www.php.net/manual/en/parallel-runtime.run.php
 */
final class Runtime
{
    private const EXCEPTION_MESSAGE = 'You should not autoload or include file `Runtime.php`! This file exists only for IDE auto complete function.';

    /**
     * Shall construct a new runtime with or without bootstrapping.
     *
     * @param string $bootstrap [optional] The location of a bootstrap file, generally an autoloader.
     */
    public function __construct(string $bootstrap = '')
    {
        throw new RuntimeException(self::EXCEPTION_MESSAGE);
    }

    /**
     * Shall schedule task for execution in parallel, passing argv at execution time.
     *
     * @param callable $task A Closure with specific characteristics.
     * @param array $argv [optional] An array of arguments with specific characteristics to be passed to task at execution time.
     * @return Future|null
     */
    public function run(callable $task, array $argv = []): ?Future
    {
        throw new RuntimeException(self::EXCEPTION_MESSAGE);
    }

    /**
     * Shall request that the runtime shutdown. Tasks scheduled for execution will be executed before the shutdown occurs.
     */
    public function close(): void
    {
        throw new RuntimeException(self::EXCEPTION_MESSAGE);
    }

    /**
     * Shall attempt to force the runtime to shutdown. Tasks scheduled for execution will not be executed, the currently running task shall be interrupted.
     */
    public function kill(): void
    {
        throw new RuntimeException(self::EXCEPTION_MESSAGE);
    }
}
