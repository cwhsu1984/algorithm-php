<?php
namespace Test\Sorting;

use Algorithm\Sorting\InsertionSort;
use PHPUnit\Framework\TestCase;

class SortingTest extends TestCase
{
    public function testInsertionSort(): void
    {
        $sorting = new InsertionSort();
        $result  = $sorting->sort([3, 4, 1, 5, 2, 8]);
        $this->assertEquals([1, 2, 3, 4, 5, 8], $result);
    }
}
