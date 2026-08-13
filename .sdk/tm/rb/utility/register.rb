# Realgazeta SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'graphql'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

RealgazetaUtility.registrar = ->(u) {
  u.clean = RealgazetaUtilities::Clean
  u.done = RealgazetaUtilities::Done
  u.make_error = RealgazetaUtilities::MakeError
  u.feature_add = RealgazetaUtilities::FeatureAdd
  u.feature_hook = RealgazetaUtilities::FeatureHook
  u.feature_init = RealgazetaUtilities::FeatureInit
  u.fetcher = RealgazetaUtilities::Fetcher
  u.make_fetch_def = RealgazetaUtilities::MakeFetchDef
  u.make_context = RealgazetaUtilities::MakeContext
  u.make_options = RealgazetaUtilities::MakeOptions
  u.make_request = RealgazetaUtilities::MakeRequest
  u.make_response = RealgazetaUtilities::MakeResponse
  u.make_result = RealgazetaUtilities::MakeResult
  u.make_point = RealgazetaUtilities::MakePoint
  u.make_spec = RealgazetaUtilities::MakeSpec
  u.make_url = RealgazetaUtilities::MakeUrl
  u.param = RealgazetaUtilities::Param
  u.prepare_auth = RealgazetaUtilities::PrepareAuth
  u.prepare_body = RealgazetaUtilities::PrepareBody
  u.prepare_headers = RealgazetaUtilities::PrepareHeaders
  u.prepare_method = RealgazetaUtilities::PrepareMethod
  u.prepare_params = RealgazetaUtilities::PrepareParams
  u.prepare_path = RealgazetaUtilities::PreparePath
  u.prepare_query = RealgazetaUtilities::PrepareQuery
  u.graphql_body = RealgazetaUtilities::GraphqlBody
  u.graphql_errors = RealgazetaUtilities::GraphqlErrors
  u.result_basic = RealgazetaUtilities::ResultBasic
  u.result_body = RealgazetaUtilities::ResultBody
  u.result_headers = RealgazetaUtilities::ResultHeaders
  u.transform_request = RealgazetaUtilities::TransformRequest
  u.transform_response = RealgazetaUtilities::TransformResponse
}
