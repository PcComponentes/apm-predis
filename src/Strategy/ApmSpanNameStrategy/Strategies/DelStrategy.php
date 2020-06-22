<?php
declare(strict_types=1);

namespace PcComponentes\ApmPredis\Strategy\ApmSpanNameStrategy\Strategies;

use PcComponentes\ApmPredis\Strategy\ApmSpanNameStrategy\ApmSpanNameStrategy;

class DelStrategy implements ApmSpanNameStrategy
{
    public function generateName(string $commandID, array $arguments): string
    {
        return strtoupper($commandID);
    }
}
