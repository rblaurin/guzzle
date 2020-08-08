<?php
namespace PvGuzzleHttp\Test\Handler;

use PvGuzzleHttp\Handler\EasyHandle;
use PvGuzzleHttp\Psr7;
use PHPUnit\Framework\TestCase;

/**
 * @covers \PvGuzzleHttp\Handler\EasyHandle
 */
class EasyHandleTest extends TestCase
{
    /**
     * @expectedException \BadMethodCallException
     * @expectedExceptionMessage The EasyHandle has been released
     */
    public function testEnsuresHandleExists()
    {
        $easy = new EasyHandle;
        unset($easy->handle);
        $easy->handle;
    }
}
