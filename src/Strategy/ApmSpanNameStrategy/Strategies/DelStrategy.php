<?php
declare(strict_types=1);

namespace PcComponentes\ApmPredisClient\Strategy\ApmSpanNameStrategy\Strategies;

use PcComponentes\ApmPredisClient\Strategy\ApmSpanNameStrategy\ApmSpanNameStrategy;

class DelStrategy implements ApmSpanNameStrategy
{
    public function generateName(string $commandID, array $arguments): string
    {
        return strtoupper($commandID);
    }
}
