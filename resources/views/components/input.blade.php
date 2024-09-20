@props([
    'name' => '',
    'class' => '',
    'type' => 'text',
    'required' => '',
    'placeholder' => '...',
])

<div class="flex flex-col mb-4">
  <label for="{{ $name }}" class="text-sm">{{ $slot }}:</label>
  <input placeholder="{{ $placeholder }}"
    class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4 {{ $class }}"
    type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" {{ $required }}>

  @error($name)
  <span class="text-red-500 text-xs mt-1">{{$message}}</p>
  @enderror
</div>
