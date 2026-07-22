package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewAuthorEntityFunc func(client *RealgazetaSDK, entopts map[string]any) RealgazetaEntity

