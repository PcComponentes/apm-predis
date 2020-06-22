<?php
declare(strict_types=1);

namespace PcComponentes\ApmPredisClient\Strategy\ApmSpanNameStrategy;

interface ApmSpanNameStrategy
{
    public function generateName(string $commandID, array $arguments): string;
}
