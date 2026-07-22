<?php
declare(strict_types=1);

// Realgazeta SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

RealgazetaUtility::setRegistrar(function (RealgazetaUtility $u): void {
    $u->clean = [RealgazetaClean::class, 'call'];
    $u->done = [RealgazetaDone::class, 'call'];
    $u->make_error = [RealgazetaMakeError::class, 'call'];
    $u->feature_add = [RealgazetaFeatureAdd::class, 'call'];
    $u->feature_hook = [RealgazetaFeatureHook::class, 'call'];
    $u->feature_init = [RealgazetaFeatureInit::class, 'call'];
    $u->fetcher = [RealgazetaFetcher::class, 'call'];
    $u->make_fetch_def = [RealgazetaMakeFetchDef::class, 'call'];
    $u->make_context = [RealgazetaMakeContext::class, 'call'];
    $u->make_options = [RealgazetaMakeOptions::class, 'call'];
    $u->make_request = [RealgazetaMakeRequest::class, 'call'];
    $u->make_response = [RealgazetaMakeResponse::class, 'call'];
    $u->make_result = [RealgazetaMakeResult::class, 'call'];
    $u->make_point = [RealgazetaMakePoint::class, 'call'];
    $u->make_spec = [RealgazetaMakeSpec::class, 'call'];
    $u->make_url = [RealgazetaMakeUrl::class, 'call'];
    $u->param = [RealgazetaParam::class, 'call'];
    $u->prepare_auth = [RealgazetaPrepareAuth::class, 'call'];
    $u->prepare_body = [RealgazetaPrepareBody::class, 'call'];
    $u->prepare_headers = [RealgazetaPrepareHeaders::class, 'call'];
    $u->prepare_method = [RealgazetaPrepareMethod::class, 'call'];
    $u->prepare_params = [RealgazetaPrepareParams::class, 'call'];
    $u->prepare_path = [RealgazetaPreparePath::class, 'call'];
    $u->prepare_query = [RealgazetaPrepareQuery::class, 'call'];
    $u->result_basic = [RealgazetaResultBasic::class, 'call'];
    $u->result_body = [RealgazetaResultBody::class, 'call'];
    $u->result_headers = [RealgazetaResultHeaders::class, 'call'];
    $u->transform_request = [RealgazetaTransformRequest::class, 'call'];
    $u->transform_response = [RealgazetaTransformResponse::class, 'call'];
});
