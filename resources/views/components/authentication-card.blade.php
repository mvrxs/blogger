<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 top-0 z-[-2] bg-[#393737] bg-[radial-gradient(#ffffff11_1px,#342B44_1px)] bg-[size:20px_20px]">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-zinc-200 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
