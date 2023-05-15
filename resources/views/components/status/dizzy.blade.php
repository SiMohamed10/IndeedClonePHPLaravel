@props(['size'])
<div class="flex flex-col text-center text-slate-400 ">
    <div class="text-[{{ $size ?? 2 }}rem]">
        <i class=" bi bi-emoji-dizzy"></i>
    </div>

    {{ $slot }}
</div>
