<?php

namespace App;

class TicTacToe
{
// BEGIN
    private $strategy;
    private $map;

// implementation without inversion of control
    public function __construct($level = 'easy')
    {
        switch ($level) {
            case 'easy':
                $this->strategy = new strategies\Easy();
                break;
            case 'normal':
                $this->strategy = new strategies\Normal();
                break;
        }
        $this->map = [
            1 => array_fill(1, 3, null),
            2 => array_fill(1, 3, null),
            3 => array_fill(1, 3, null)
        ];
    }

    public function go($row = null, $col = null)
    {
        if ($row === null || $col === null) {
            [$autoRow, $autoCol] = $this->strategy->getNextStep($this->map);
            $this->map[$autoRow][$autoCol] = 'AI';
            return $this->isWinner('AI');
        }
        $this->map[$row][$col] = 'Player';
        return $this->isWinner('Player');
    }

    private function isWinner($type)
    {
        foreach ($this->map as $row) {
            if ($this->populatedByOnePlayer($row, $type)) {
                return true;
            }
        }

        for ($i = 1; $i <= 3; $i++) {
            if ($this->populatedByOnePlayer(array_column($this->map, $i), $type)) {
                return true;
            }
        }

        $diagonal1 = [$this->map[1][1], $this->map[2][2], $this->map[3][3]];
        if ($this->populatedByOnePlayer($diagonal1, $type)) {
            return true;
        }

        $diagonal2 = [$this->map[3][1], $this->map[2][2], $this->map[1][3]];
        if ($this->populatedByOnePlayer($diagonal2, $type)) {
            return true;
        }

        return false;
    }

    private function populatedByOnePlayer($row, $type)
    {
        foreach ($row as $value) {
            if ($value !== $type) {
                return false;
            }
        }
        return true;
    }
// END
}
