-- Realgazeta SDK exists test

local sdk = require("realgazeta_sdk")

describe("RealgazetaSDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)
