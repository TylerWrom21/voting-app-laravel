<div class="p-5 shadow-lg border border-slate-300 rounded-lg bg-slate-100">
    @if(isset($image))
        <img src="{{ asset('storage/' . $image) }}" alt="Image" class="w-full h-full object-cover rounded-lg">
    @endif
    {{ $slot }}
    {{-- @if(isset($description)) --}}
</div>