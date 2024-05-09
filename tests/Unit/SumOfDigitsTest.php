<?php

namespace Tests\Unit;

use Tests\TestCase;

class SumOfDigitsTest extends TestCase
{
    /**
     * @return void
     */
    public function testSumOfDigits()
    {
        $this->assertEquals(5, $this->sumOfDigits(23));
        $this->assertEquals(19, $this->sumOfDigits(496));
        $this->assertEquals(57, $this->sumOfDigits(123456878445));
    }

    /**
     * 入力された10進数を加算して返す
     *  23 → 2 + 3 = 5
     *
     * @param int $digit
     * @return int
     */
    function sumOfDigits(int $digit): int
    {
        // ここに書く！
        
        // 1：整数から文字列に変換する。
        $str_digit = (string)$digit;
        // 2：1文字ずつ区切って配列に格納する。
        $digits = str_split($str_digit);
        // 3：足し算をする
        $result = array_sum($digits);
        // 4：結果を返す
        return $result;
    }
}