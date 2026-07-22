
import { Context } from './Context'


class RealgazetaError extends Error {

  isRealgazetaError = true

  sdk = 'Realgazeta'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  RealgazetaError
}

