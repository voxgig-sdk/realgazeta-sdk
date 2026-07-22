<?php
declare(strict_types=1);

// Realgazeta SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class RealgazetaFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new RealgazetaBaseFeature();
            case "test":
                return new RealgazetaTestFeature();
            default:
                return new RealgazetaBaseFeature();
        }
    }
}
