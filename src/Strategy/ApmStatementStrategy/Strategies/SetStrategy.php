<?php
declare(strict_types=1);

namespace PcComponentes\ApmPredis\Strategy\ApmStatementStrategy\Strategies;

use PcComponentes\ApmPredis\Strategy\ApmStatementStrategy\ApmStatementStrategy;

class SetStrategy implements ApmStatementStrategy
{
    public function generateStatement(array $arguments): string
    {
        $return = [];

        for ($i=1; $i<=count($arguments); $i+=2) {
            $json = json_decode($arguments[$i], true);
            $data = $json ? json_decode($json, true) : $arguments[$i];
            $return [$arguments[$i - 1]] = $data;
        }

        return json_encode($return);
    }
}
