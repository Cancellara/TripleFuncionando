<html>
    <body>
        {{ $locale = App::getLocale()}}
        <h1>{{ __('messages.title') }}</h1>
        <h2>{{ __('messages.text') }}</h2>
        <h2>{{ __('messages.onlyEnglish') }}</h2>
        <h2>{{ __('messages.NoExiste') }}</h2>
        <p>El __ sirve para que si no existe cadena nos devuelva el literal elegido</p>
        <a href="{{ route('localizacion.test2',$locale) }}">{{ __('messages.link2') }}</a>
    </body>
</html>