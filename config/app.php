<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    'locale_php' => env('APP_LOCALE_PHP', 'en_US'),

    'log' => env('APP_LOG', 'daily'),

    'log_level' => env('APP_LOG_LEVEL', 'debug'),

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */
        Anhskohbo\NoCaptcha\NoCaptchaServiceProvider::class,
        Arcanedev\LogViewer\LogViewerServiceProvider::class,
        Arcanedev\NoCaptcha\NoCaptchaServiceProvider::class,
        Collective\Html\HtmlServiceProvider::class,
        Creativeorange\Gravatar\GravatarServiceProvider::class,
        // DaveJamesMiller\Breadcrumbs\ServiceProvider::class,
        HieuLe\Active\ActiveServiceProvider::class,
        Laravel\Socialite\SocialiteServiceProvider::class,
        Yajra\Datatables\DatatablesServiceProvider::class,
        /*
         * Application Service Providers...
         */
        App\Providers\AccessServiceProvider::class,
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        App\Providers\BladeServiceProvider::class,
        //App\Providers\BroadcastServiceProvider::class,
        App\Providers\ComposerServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\HistoryServiceProvider::class,
        App\Providers\MacroServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        Stevebauman\Location\LocationServiceProvider::class,
        Barryvdh\Snappy\ServiceProvider::class,
        //        Way\Generators\GeneratorsServiceProvider::class,
        //        Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class,
        //        Orangehill\Iseed\IseedServiceProvider::class,
        //        Barryvdh\DomPDF\ServiceProvider::class,
    ])->toArray(),

    'aliases' => Facade::defaultAliases()->merge([
        'Active' => HieuLe\Active\Facades\Active::class,
        'Form' => Collective\Html\FormFacade::class,
        'Gravatar' => Creativeorange\Gravatar\Facades\Gravatar::class,
        'Html' => Collective\Html\HtmlFacade::class,
        'Location' => Stevebauman\Location\Facades\Location::class,
        'NoCaptcha' => Anhskohbo\NoCaptcha\Facades\NoCaptcha::class,
        'PDF' => Barryvdh\Snappy\Facades\SnappyPdf::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'SnappyImage' => Barryvdh\Snappy\Facades\SnappyImage::class,
        'Socialite' => Laravel\Socialite\Facades\Socialite::class,
    ])->toArray(),

];
