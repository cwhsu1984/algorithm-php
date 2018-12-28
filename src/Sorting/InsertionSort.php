<?php
namespace Algorithm\Sorting;

class InsertionSort
{
    public function sort(array $data): array
    {
        for ($i = 0; $i < \count($data); $i++) {
            $key = $data[$i];
            $j   = $i - 1;

            while ($j > -1 && $key < $data[$j]) {
                $data[$j + 1] = $data[$j];
                $j--;
            }
            $data[$j + 1] = $key;
        }

        return $data;
    }
}
