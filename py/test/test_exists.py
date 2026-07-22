# ProjectName SDK exists test

import pytest
from realgazeta_sdk import RealgazetaSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = RealgazetaSDK.test(None, None)
        assert testsdk is not None
