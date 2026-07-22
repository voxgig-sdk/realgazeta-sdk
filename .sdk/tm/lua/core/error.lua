-- Realgazeta SDK error

local RealgazetaError = {}
RealgazetaError.__index = RealgazetaError


function RealgazetaError.new(code, msg, ctx)
  local self = setmetatable({}, RealgazetaError)
  self.is_sdk_error = true
  self.sdk = "Realgazeta"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function RealgazetaError:error()
  return self.msg
end


function RealgazetaError:__tostring()
  return self.msg
end


return RealgazetaError
