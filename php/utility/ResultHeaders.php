<?php
declare(strict_types=1);

// Realgazeta SDK utility: result_headers

class RealgazetaResultHeaders
{
    public static function call(RealgazetaContext $ctx): ?RealgazetaResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
