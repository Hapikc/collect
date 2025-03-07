<?php

use Collect\Collect;
use PHPUnit\Framework\TestCase;

class CollectTest extends TestCase
{
    public function testPop()
    {
        $collect = new Collect([1, 2, 3]);
        $collect->pop();
        $this->assertEquals([1, 2], $collect->toArray());
    }

    public function testSplice()
    {
        $collect = new Collect([1, 2, 3, 4]);
        $collect->splice(1, 2);
        $this->assertEquals([1, 4], $collect->toArray());
    }

    public function testKeys()
    {
        $collect = new Collect(['a' => 1, 'b' => 2]);
        $this->assertEquals(['a', 'b'], $collect->keys()->toArray());
    }

    public function testFirst()
    {
        $collect = new Collect([10, 20, 30]);
        $this->assertEquals(10, $collect->first());
    }
}