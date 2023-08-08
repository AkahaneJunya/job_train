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
                    <h1>Trainer</h1>
                    <a href='/manager/trainers/create'>create</a>
                    <div class='trainers'>
                        @foreach ($trainers as $trainer)
                            <div class='trainer'>
                                <h2 class='name'>
                                    <a href="/manager/trainers/{{ $trainer->id }}">{{ $trainer->user->name }}</a>
                                </h2>
                                <h3>教育係登録日</h3>
                                <p class='record_date'>{{ $trainer->record_date }}</p>
                                <form action="/manager/trainers/{{ $trainer->id }}" id="form_{{ $trainer->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="deleteTrainer({{ $trainer->id }})">delete</button> 
                                </form>
                            </div>
                        @endforeach
                    </div>
                    <script>
                        function deleteTrainer(id) {
                            'use strict'
                    
                            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                                document.getElementById(`form_${id}`).submit();
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
