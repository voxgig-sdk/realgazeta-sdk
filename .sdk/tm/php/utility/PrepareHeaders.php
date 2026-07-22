<?php
declare(strict_types=1);

// Realgazeta SDK utility: prepare_headers

class RealgazetaPrepareHeaders
{
    public static function call(RealgazetaContext $ctx): array
    {
        $options = $ctx->client->options_map();
        $headers = \Voxgig\Struct\Struct::getprop($options, 'headers');
        if (!$headers) {
            return [];
        }
        $out = \Voxgig\Struct\Struct::clone($headers);
        return is_array($out) ? $out : [];
    }
}
