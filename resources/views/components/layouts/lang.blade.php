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
