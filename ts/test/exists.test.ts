
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { RealgazetaSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await RealgazetaSDK.test()
    equal(null !== testsdk, true)
  })

})
