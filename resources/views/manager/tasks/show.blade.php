<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task') }}
        </h2>
    </x-slot>
    
   <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="title">
                        {{ $task->name }}
                    </h1>
                    <div class="detail">
                        <div class="content__post">
                            <h3>業務詳細</h3>
                            <p>{{ $task->detail }}</p>    
                        </div>
                    </div>
                    <div class="footer">
                        <a href="/task">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
