# Realgazeta SDK exists test

require "minitest/autorun"
require_relative "../Realgazeta_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = RealgazetaSDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
