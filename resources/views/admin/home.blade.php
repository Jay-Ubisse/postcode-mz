<x-layout>
    <x-slot:title>
        Pagina Inicial
    </x-slot>
    @if (session('user_id'))
        <div class="alert alert-error">
            {{ session('user_id') }}
        </div>
    @endif
</x-layout>
