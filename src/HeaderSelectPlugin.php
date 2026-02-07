<?php

namespace Fabianosfbr\HeaderSelect;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\View\PanelsRenderHook;

class HeaderSelectPlugin implements Plugin
{
    protected array $selects = [];

    protected static array $callbacks = [];

    protected static array $optionProviders = [];

    protected string $globalRounded = '';

    public function getId(): string
    {
        return 'header-select';
    }

    public function register(Panel $panel): void
    {
        $panel->renderHook(
            PanelsRenderHook::TOPBAR_START,
            fn (): string => view('header-select::selects', [
                'selects' => $this->selects,
            ])->render()
        );
    }

    public function selects(array $selects): static
    {
        $this->selects = $selects;

        // Apply global rounded setting to all selects (override individual settings)
        if (! empty($this->globalRounded)) {
            foreach ($this->selects as $select) {
                $select->rounded($this->globalRounded);
            }
        }

        return $this;
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
