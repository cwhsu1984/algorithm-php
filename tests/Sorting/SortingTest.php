<?php
namespace Test\Sorting;

use Algorithm\Sorting\HeapSort;
use Algorithm\Sorting\InsertionSort;
use Algorithm\Sorting\QuickSort;
use PHPUnit\Framework\TestCase;

class SortingTest extends TestCase
{
    public function testInsertionSort(): void
    {
        $sorting = new InsertionSort();
        $result  = $sorting->sort([3, 4, 1, 5, 2, 8]);
        $this->assertEquals([1, 2, 3, 4, 5, 8], $result);
    }

    public function testQuickSort(): void
    {
        $sorting = new QuickSort();
        $result  = $sorting->sort([3, 4, 1, 5, 2, 8]);
        $this->assertEquals([1, 2, 3, 4, 5, 8], $result);
    }

    public function testHeapSort(): void
    {
        $sorting = new HeapSort();
        $result  = $sorting->sort([3, 4, 1, 5, 2, 8]);
        $this->assertEquals([1, 2, 3, 4, 5, 8], $result);
    }
}
