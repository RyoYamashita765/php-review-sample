<?php

echo "Hello, World!";

class SampleClass {
    public function func1() {
        for ($i = 1; $i <= 10; $i++) {
            echo 'i = ' . $i . PHP_EOL;
        }

        for ($j = 1; $j <= 10; $j++) {
            echo 'j = ' . $j . PHP_EOL;
        }

        for ($k = 1; $k <= 10; $k++) {
            echo 'k = ' . $k . PHP_EOL;
        }
    }
}
