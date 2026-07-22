<?php
declare(strict_types=1);

// Realgazeta SDK base feature

class RealgazetaBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    // Positions this feature when added via the client `extend` option:
    // "__before__" / "__after__" / "__replace__" name an already-added
    // feature (mirrors the ts feature `_options`). Declared so setting it
    // on an extension instance avoids the dynamic-property deprecation.
    public ?array $_options = null;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(RealgazetaContext $ctx, array $options): void {}
    public function PostConstruct(RealgazetaContext $ctx): void {}
    public function PostConstructEntity(RealgazetaContext $ctx): void {}
    public function SetData(RealgazetaContext $ctx): void {}
    public function GetData(RealgazetaContext $ctx): void {}
    public function GetMatch(RealgazetaContext $ctx): void {}
    public function SetMatch(RealgazetaContext $ctx): void {}
    public function PrePoint(RealgazetaContext $ctx): void {}
    public function PreSpec(RealgazetaContext $ctx): void {}
    public function PreRequest(RealgazetaContext $ctx): void {}
    public function PreResponse(RealgazetaContext $ctx): void {}
    public function PreResult(RealgazetaContext $ctx): void {}
    public function PreDone(RealgazetaContext $ctx): void {}
    public function PreUnexpected(RealgazetaContext $ctx): void {}
}
