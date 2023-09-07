<div>
    <x-label>{{ $label }}</x-label>
    <div class="h-1"> </div>
    <x-input name="{{ $value }}" value="{{ old($value) }}" type="{{ $type }}"
        class="input input-bordered"></x-input>
</div>
