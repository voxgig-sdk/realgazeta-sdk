<?php
declare(strict_types=1);

// Realgazeta SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class RealgazetaMakeContext
{
    public static function call(array $ctxmap, ?RealgazetaContext $basectx): RealgazetaContext
    {
        return new RealgazetaContext($ctxmap, $basectx);
    }
}
