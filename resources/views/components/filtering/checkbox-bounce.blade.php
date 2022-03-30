@props(['id', 'name', 'value'])
    
<div class="checkbox bounce filterable">

    <input type="checkbox" id="{{ $id }}" name="{{ $name }}[]" value="{{ $value }}" 
    
        @if (request()->$name != null)
            @if (in_array($value , request()->$name))
                checked
            @endif
        @endif

    />
    

    <svg viewBox="0 0 21 21">
        <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
    </svg>
</div>
