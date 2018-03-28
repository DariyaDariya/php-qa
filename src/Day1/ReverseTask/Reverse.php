<?php

namespace Day1\ReverseTask;

class Reverse
{

    /**  @var string */

    public $result;

    public function solution(string $initial_str): string
    {
        $length = strlen($initial_str);

        if ($length == 0) {

            $this->result = 'Please, paste smth';

            return $this->result;
        }

        for ($i = 0; $i <= ($length-1); $i++) {

            $n = $length - $i - 1;

            $result_str[$i] = $initial_str[$n];

        }

        $this->result = implode($result_str);

        return $this->result;

    }
}

$rev = new Reverse;

echo $rev->solution('') . "\n";




