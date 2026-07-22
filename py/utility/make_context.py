# Realgazeta SDK utility: make_context

from core.context import RealgazetaContext


def make_context_util(ctxmap, basectx):
    return RealgazetaContext(ctxmap, basectx)
