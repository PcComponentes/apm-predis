<?php
declare(strict_types=1);

namespace PcComponentes\ApmPredisClient\Strategy\ApmStatementStrategy;

use PcComponentes\ApmPredisClient\ApmAcceptedMethods;
use PcComponentes\ApmPredisClient\Strategy\ApmStatementStrategy\Strategies\DefaultStrategy;
use PcComponentes\ApmPredisClient\Strategy\ApmStatementStrategy\Strategies\DelStrategy;

class ApmStatementContext
{
    private ApmStatementStrategy $strategy;

    public function __construct(string $method)
    {
        switch ($method) {
            case ApmAcceptedMethods::METHOD_DEL:
                $this->strategy = new DelStrategy();
                break;
            case ApmAcceptedMethods::METHOD_GET:
            case ApmAcceptedMethods::METHOD_SET:
            case ApmAcceptedMethods::METHOD_KEYS:
            default:
                $this->strategy = new DefaultStrategy();
                break;
        }
    }

    public function generateStatement(array $arguments): string
    {
        return $this->strategy->generateStatement($arguments);
    }
}
