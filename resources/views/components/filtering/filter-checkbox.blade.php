@props(['id', 'name', 'value', 'previouspost'])

<input type="checkbox" id="{{ $id }}" name="{{ $name }}[]" value="{{ $value }}"

@if (isset($previouspost[$name]))
    @foreach ($previouspost[$name] as $attributeValue)
        @if ($attributeValue == $value)
            checked
        @endif
    @endforeach
@endif
>