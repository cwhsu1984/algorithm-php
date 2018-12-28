<?php
namespace Algorithm\Sorting;

class QuickSort
{
    public function sort(array $data): array
    {
        $this->qsort(0, \count($data) - 1, $data);

        return $data;
    }

    private function qsort(int $front, int $end, array &$data): void
    {
        if ($front < $end) {
            $pivot = $this->partition($front, $end, $data);
            $this->qsort(0, $pivot - 1, $data);
            $this->qsort($pivot + 1, $end, $data);
        }
    }

    private function partition(int $front, int $end, array &$data): int
    {
        $i     = $front - 1;
        $pivot = $end;

        for ($j = $front; $j < $end; $j++) {
            if ($data[$pivot] > $data[$j]) {
                $i++;
                $this->swap($data[$i], $data[$j]);
            }
        }
        $i++;
        $this->swap($data[$i], $data[$pivot]);

        return $i;
    }

    private function swap(&$x, &$y): void
    {
        $tmp = $x;
        $x   = $y;
        $y   = $tmp;
    }
}
