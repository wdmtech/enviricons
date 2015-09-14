
{{--Local--}}
@if(app()->environment() == config('enviricons.environment.local', 'local'))

    <link rel="icon" href="packages/wdmtech/enviricons/local/favicon.ico" type="image/x-icon">

{{--Dev--}}
@elseif(app()->environment() == config('enviricons.environment.dev', 'dev'))

    <link rel="icon" href="packages/wdmtech/enviricons/dev/favicon.ico" type="image/x-icon">

{{--staging--}}
@elseif(app()->environment() == config('enviricons.environment.staging', 'staging'))

    <link rel="icon" href="packages/wdmtech/enviricons/staging/favicon.ico" type="image/x-icon">

{{-- Your default/live favicon  --}}
@else

    <link rel="icon" href="packages/wdmtech/enviricons/favicon.ico" type="image/x-icon">

@endif
