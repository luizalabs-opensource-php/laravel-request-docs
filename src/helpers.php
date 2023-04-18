<?php

function runTheLast($rule, $loop = 1)
{
    if (is_array($rule)) {
        return runTheLast(Arr::first($rule), ++$loop);
    }

    return $rule;
}
