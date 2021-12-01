@props(['id', 'name', 'value', 'previouspost'])

<input type="radio" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" 


@if (isset($previouspost[$name]))
    @if ($previouspost[$name] == $value) 
        checked 
    @endif 
@endif>

