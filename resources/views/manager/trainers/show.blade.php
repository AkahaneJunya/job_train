<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trainer') }}
        </h2>
    </x-slot>
    
   <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="name">
                        {{ $trainer->user->name }}
                    </h1>
                    <div class="record_date">
                        <h3>教育係登録日</h3>
                        <p>{{ $trainer->record_date }}</p>    
                    </div>
                    <div class="footer">
                        <a href="/manager/trainer">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
