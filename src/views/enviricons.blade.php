
{{--Local--}}
@if(App::environment() == Config::get('enviricons', 'local'))

    <link rel="icon" href="/packages/wdmtech/enfaviconsenviricons/favicons/local/favicon.ico" type="image/x-icon">

{{--Dev--}}
@elseif(App::environment() == Config::get('enviricons', 'dev'))

    <link rel="icon" href="/favicons/dev/favicon.ico" type="image/x-icon">

{{--staging--}}
@elseif(App::environment() == Config::get('enfavicons.environment.staging', 'staging'))

    <link rel="icon" href="/favicons/staging/favicon.ico" type="image/x-icon">

{{-- Your default/live favicon  --}}
@else

    <link rel="icon" href="/favicon.ico" type="image/x-icon">

@endif
