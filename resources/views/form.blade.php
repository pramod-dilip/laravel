@extends('master');
@section('pageContent')
    <b>How to use Laravel Form Helper</b><br>
    Install Laravel Collective packages<br>

    Since Laravel 5, some Laravel components have been removed from the core framework. If you've used older versions of Laravel before, you may love these features:<br>

    HTML: HTML helpers for creating common HTML and form elements<br>

    Annotations: route and events annotations.<br>

    Remote: a simple way to SSH into remote servers and run commands.<br>
    Fortunately, bringing all these features back is very easy. You just need to install LaravelCollective package!<br>

    http://laravelcollective.com<br>

    Don't know how to install the package? Let me show you.<br>

    Install a package using Composer<br>

    First, you need to open your composer.json file, which is placed in your application root. In that file find :<br>

    "require": {<br>
    "php": ">=5.6.4",<br>
    "laravel/framework": "5.3.*",<br>
    },<br><br>

    add :<br>

    "require": {<br>
    "php": ">=5.6.4",<br>
    "laravel/framework": "5.3.*",<br><br>
    <b>"laravelcollective/html": "5.3.*"</b><br>
    },<br><br>

    Save the file and run this command at your application root:<br>

    composer update<br>

    Done! You've just installed LaravelCollective/HTML package!<br>

    Create a service provider and aliases<br>

    After installing the HTML package via Composer. You need to follow some extra steps to let Laravel know where to find the package and use it.<br>

    To use the package, you have to add a service provider to the providers array of the config/app.php.<br>

    Find:<br>

    'providers' => [<br>

    /*<br>
    * Laravel Framework Service Providers...<br>
    */<br>
    Illuminate\Foundation\Providers\ArtisanServiceProvider::class,<br>
    .............<br>
    .............<br>
    Illuminate\View\ViewServiceProvider::class,<br>

    /*
    * Application Service Providers...<br>
    */
    App\Providers\AppServiceProvider::class,<br>
    App\Providers\EventServiceProvider::class,<br>
    App\Providers\RouteServiceProvider::class,<br><br>

    ],<br>

    Add the following line to the $provider array:<br><br>

    Collective\Html\HtmlServiceProvider::class,<br><br>

    Then find the aliases array: 'aliases' => [<br><br>

    add these two aliases to the aliases array:<br>

    'Form' => Collective\Html\FormFacade::class,<br>
    'Html' => Collective\Html\HtmlFacade::class,<br>
@endsection