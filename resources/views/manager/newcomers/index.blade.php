<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Newcomer') }}
        </h2>
    </x-slot>

   <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Newcomer</h1>
                    <div class='newcomers'>
                        @foreach ($newcomers as $newcomer)
                            <div class='newcomer'>
                                <h2 class='name'>
                                    {{ $newcomer->user->name }}
                                </h2>
                                <h3>新人入社日</h3>
                                <p class='entering_date'>{{ $newcomer->entering_date }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>