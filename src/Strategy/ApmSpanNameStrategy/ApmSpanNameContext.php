<?php
declare(strict_types=1);

namespace PcComponentes\ApmPredis\Strategy\ApmSpanNameStrategy;

use PcComponentes\ApmPredis\ApmAcceptedMethods;
use PcComponentes\ApmPredis\Strategy\ApmSpanNameStrategy\Strategies\DefaultStrategy;
use PcComponentes\ApmPredis\Strategy\ApmSpanNameStrategy\Strategies\DelStrategy;

class ApmSpanNameContext
{
    private ApmSpanNameStrategy $strategy;

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

    public function generateName(string $commandID, array $arguments)
    {
        return $this->strategy->generateName($commandID, $arguments);
    }
}
