# Realgazeta SDK utility: make_context
require_relative '../core/context'
module RealgazetaUtilities
  MakeContext = ->(ctxmap, basectx) {
    RealgazetaContext.new(ctxmap, basectx)
  }
end
