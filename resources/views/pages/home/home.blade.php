<x-layout>
    <x-panel>
        <h1 class="text-3xl font-bold underline">
            <a href="/"> Amazing Foods</a>
        </h1>
    </x-panel>

    <a
        href={{(route("register.create"))}}
        class="flex w-fit justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
    >
        Register</a>
</x-layout>
