# Idiomas
; Instalar
````bash
→ composer require laravel-lang/common

````
; Instalar lenguajes
```bash
 php artisan lang:add en
 php artisan lang:add es
 php artisan lang:add fr
```
## En el back
;Creamos el controlador
```bash
php artisan make:Controller LanguageController -i
```
;Creamos la ruta para cambiar el idioma
```php

 use App\Http\Controllers\LanguageController;
 Route::get("lang/{lang}",LanguageController::class)->name("change_lang");

```
;Escribimos el código del controlador
```php
  public function __invoke(Request $request, string $lang)
    {

        session()->put("locale", $lang);
        app()->setLocale($lang);
        return redirect()->back();
        //
    }
```
;Creamos el middleware

```bash
php artisan make:middleware ChangeLanguageMiddleware
```
;Escribimos el código del middleware
```php
 public function handle(Request $request, Closure $next): Response
    {
        $locale = session()->get('locale') ?? config('app.locale');
        //        $locale = session('locale', config('app.locale'));
        app()->setLocale($locale);
        return $next($request);
    }

```
;Registramos el middleware a todas las rutas de web.php, en app.php, añadiéndolo y dejando los que tuviese (por eso el append)

```php
$middleware->web(append:[
            \App\Http\Middleware\ChangeLanguageMiddleware::class
        ])
```
;Cremos un fichero de banderas en config
(se pueden copiar de https://emojiterra.com/es/banderas/)
```php
<?php
return[
    "es"=>[
        "name"=>"Español",
        "flag"=>"🇪🇸",
    ],
    "fr"=>[
        "name"=>"France",
        "flag"=>"🇫🇷",
    ],
    "en"=>[
        "name"=>"Enghis",
        "flag"=>"🇬🇧",
    ]
];
?>
```
;Cremos el front un select
```html
<select
    name="lang"
    onchange="if (this.value) window.location.href = this.value"
>
    <option value="" selected disabled>
        {{ __('Selecciona un idioma') }}
    </option>

    @foreach (config('languages') as $code => $data)
        <option value="{{ route('change_lang', $code) }}">
            {{ $data['name'] }} {{ $data['flag'] }}
        </option>
    @endforeach
</select>

```

Ahora queda wrappear todos los textos de html que escribamos en la función correspondiente y añadir las entradas en los ficheros de traducción es.json fr.json, en.json



[Clase para el lunes 19/01/2026](./Doc_clases/lunes_19_1.md)

