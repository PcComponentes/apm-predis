<?php
declare(strict_types=1);

namespace PcComponentes\ApmPredisClient\Strategy\ApmStatementStrategy\Strategies;

use PcComponentes\ApmPredisClient\Strategy\ApmStatementStrategy\ApmStatementStrategy;

class DelStrategy implements ApmStatementStrategy
{
    public function generateStatement(array $arguments): string
    {
        return json_encode($arguments[0]);
    }
}
