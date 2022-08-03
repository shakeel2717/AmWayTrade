@if ($label == "show")
    <label class="mt-4 mb-2" for="{{ $name }}">{{ $placeholder }}</label>
@endif
<input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
    class="intro-x login__input form-control py-3 @if ($label != 'show') mt-4 @endif px-4 border-gray-300 d-block" placeholder="{{ $placeholder }}"
    value="{{ old($name, $value) }}" {{ $attribute }}>
