<?php
declare(strict_types=1);

namespace PcComponentes\ApmPredisClient;

class ApmAcceptedMethods
{
    public const METHOD_GET = 'get';
    public const METHOD_SET = 'set';
    public const METHOD_DEL = 'del';
    public const METHOD_KEYS = 'keys';
    public const TRACEABLE_METHOD = [self::METHOD_GET, self::METHOD_SET, self::METHOD_DEL, self::METHOD_KEYS];

    public static function acceptedMethods(string $commandID): bool
    {
        return in_array($commandID, self::TRACEABLE_METHOD);
    }
}
