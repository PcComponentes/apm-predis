<?php
declare(strict_types=1);

namespace PcComponentes\ApmPredis\Strategy\ApmStatementStrategy;

interface ApmStatementStrategy
{
    public function generateStatement(array $arguments): string;
}
