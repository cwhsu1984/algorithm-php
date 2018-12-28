<?php
namespace Algorithm\Sorting;

class HeapSort
{
    public function sort(array $data): array
    {
        $data = \array_merge([-1], $data);
        $this->buildMaxHeap($data);

        for ($j = \count($data) - 1; $j > 1; $j--) {
            $this->swap($data[1], $data[$j]);
            $this->maxHeap(1, $j - 1, $data);
        }
        \array_shift($data);

        return $data;
    }

    public function buildMaxHeap(array &$data): void
    {
        $size = \count($data);

        for ($mid = (int) ($size / 2); $mid > 0; $mid--) {
            $this->maxHeap($mid, $size - 1, $data);
        }
    }

    public function maxHeap(int $root, int $size, array &$data): void
    {
        $left    = $root * 2;
        $right   = $left + 1;
        $largest = $root;

        if ($left <= $size) {
            $largest = $left;
        }

        if ($right <= $size && $data[$right] > $data[$left]) {
            $largest = $right;
        }

        if ($data[$largest] > $data[$root]) {
            $this->swap($data[$largest], $data[$root]);
            $this->maxHeap($largest, $size, $data);
        }
    }

    public function swap(int &$x, int &$y): void
    {
        $tmp = $x;
        $x   = $y;
        $y   = $tmp;
    }
}
