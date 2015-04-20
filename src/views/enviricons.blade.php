
{{--Local--}}
@if(App::environment() == Config::get('enviricons.environment.local', 'local'))

    <link rel="icon" href="packages/wdmtech/enviricons/local/favicon.ico" type="image/x-icon">

{{--Dev--}}
@elseif(App::environment() == Config::get('enviricons.environment.dev', 'dev'))

    <link rel="icon" href="packages/wdmtech/enviricons/dev/favicon.ico" type="image/x-icon">

{{--staging--}}
@elseif(App::environment() == Config::get('enviricons.environment.staging', 'staging'))

    <link rel="icon" href="packages/wdmtech/enviricons/staging/favicon.ico" type="image/x-icon">

{{-- Your default/live favicon  --}}
@else

    <link rel="icon" href="packages/wdmtech/enviricons/favicon.ico" type="image/x-icon">

@endif
