<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                    'primary' => Color::Amber,
                    'danger' => Color::Rose,
                    'gray' => Color::Gray,
                    'info' => Color::Yellow,
                    // 'primary' => Color::Teal,
                    'success' => Color::Green,
                    'warning' => Color::Orange,
                    // Warna tambahan
                    'slate' => Color::Slate,
                    'zinc' => Color::Zinc,
                    'neutral' => Color::Neutral,
                    'stone' => Color::Stone,
                    'red' => Color::Red,
                    'orange' => Color::Orange,
                    'yellow' => Color::Yellow,
                    'green' => Color::Green,
                    'blue' => Color::Blue,
                    'amber' => Color::Amber,
                    'lime' => Color::Lime,
                    'emerald' => Color::Emerald,
                    'teal' => Color::Teal,
                    'cyan' => Color::Cyan,
                    'sky' => Color::Sky,
                    'indigo' => Color::Indigo,
                    'violet' => Color::Violet,
                    'purple' => Color::Purple,
                    'fuchsia' => Color::Fuchsia,
                    'pink' => Color::Pink,
                    'rose' => Color::Rose,
            ])
            ->spa()
            ->sidebarWidth('13rem')
            ->sidebarCollapsibleOnDesktop(true)
            ->sidebarFullyCollapsibleOnDesktop(true)
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->topNavigation();
            ;

    }
}
