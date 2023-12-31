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
                    <h1 class="name">
                        {{ $newcomer->user->name }}
                    </h1>
                    <div class="entering_date">
                        <h3>新人入社日</h3>
                        <p>{{ $newcomer->entering_date }}</p>    
                    </div>
                    <div class="edit"><a href="/manager/newcomers/{{ $newcomer->id }}/edit">edit</a></div>
                    <div class="footer">
                        <a href="/manager/newcomer">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>