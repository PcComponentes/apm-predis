<?php
declare(strict_types=1);

namespace PcComponentes\ApmPredis\Strategy\ApmStatementStrategy\Strategies;

use PcComponentes\ApmPredis\Strategy\ApmStatementStrategy\ApmStatementStrategy;

class DefaultStrategy implements ApmStatementStrategy
{
    public function generateStatement(array $arguments): string
    {
        return json_encode($arguments);
    }
}
