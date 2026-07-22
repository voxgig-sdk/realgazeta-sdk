<?php
declare(strict_types=1);

// Realgazeta SDK utility: result_body

class RealgazetaResultBody
{
    public static function call(RealgazetaContext $ctx): ?RealgazetaResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
