# Realgazeta SDK feature factory

from realgazeta_sdk.feature.base_feature import RealgazetaBaseFeature
from realgazeta_sdk.feature.test_feature import RealgazetaTestFeature


def _make_feature(name):
    features = {
        "base": lambda: RealgazetaBaseFeature(),
        "test": lambda: RealgazetaTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
