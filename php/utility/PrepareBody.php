<?php
declare(strict_types=1);

// Realgazeta SDK utility: prepare_body

class RealgazetaPrepareBody
{
    public static function call(RealgazetaContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
