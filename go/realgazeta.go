package voxgigrealgazetasdk

import (
	"github.com/voxgig-sdk/realgazeta-sdk/go/core"
	"github.com/voxgig-sdk/realgazeta-sdk/go/entity"
	"github.com/voxgig-sdk/realgazeta-sdk/go/feature"
	_ "github.com/voxgig-sdk/realgazeta-sdk/go/utility"
)

// Type aliases preserve external API.
type RealgazetaSDK = core.RealgazetaSDK
type Context = core.Context
type Utility = core.Utility
type Feature = core.Feature
type Entity = core.Entity
type RealgazetaEntity = core.RealgazetaEntity
type FetcherFunc = core.FetcherFunc
type Spec = core.Spec
type Result = core.Result
type Response = core.Response
type Operation = core.Operation
type Control = core.Control
type RealgazetaError = core.RealgazetaError

// BaseFeature from feature package.
type BaseFeature = feature.BaseFeature

func init() {
	core.NewBaseFeatureFunc = func() core.Feature {
		return feature.NewBaseFeature()
	}
	core.NewTestFeatureFunc = func() core.Feature {
		return feature.NewTestFeature()
	}
	core.NewAuthorEntityFunc = func(client *core.RealgazetaSDK, entopts map[string]any) core.RealgazetaEntity {
		return entity.NewAuthorEntity(client, entopts)
	}
}

// Constructor re-exports.
var NewRealgazetaSDK = core.NewRealgazetaSDK
var TestSDK = core.TestSDK
var NewContext = core.NewContext
var NewSpec = core.NewSpec
var NewResult = core.NewResult
var NewResponse = core.NewResponse
var NewOperation = core.NewOperation
var MakeConfig = core.MakeConfig

// No-arg convenience constructors. Go has no default-argument syntax,
// so these aliases let callers write `sdk.New()` / `sdk.Test()`
// instead of `sdk.NewRealgazetaSDK(nil)` / `sdk.TestSDK(nil, nil)`
// for the common no-options case.
func New() *RealgazetaSDK  { return NewRealgazetaSDK(nil) }
func Test() *RealgazetaSDK { return TestSDK(nil, nil) }
var NewBaseFeature = feature.NewBaseFeature
var NewTestFeature = feature.NewTestFeature
