# Realgazeta SDK utility: make_context

from realgazeta_sdk.core.context import RealgazetaContext


def make_context_util(ctxmap, basectx):
    return RealgazetaContext(ctxmap, basectx)
