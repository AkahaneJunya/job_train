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
                    <h1>Task</h1>
                    <a href='/manager/tasks/create'>create</a>
                    <div class='tasks'>
                        @foreach ($tasks as $task)
                            <div class='task'>
                                <h2 class='name'>
                                    <a href="/manager/tasks/{{ $task->id }}">{{ $task->name }}</a>
                                </h2>
                                <p class='detail'>{{ $task->detail }}</p>
                                <form action="/manager/tasks/{{ $task->id }}" id="form_{{ $task->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="deleteTask({{ $task->id }})">delete</button> 
                                </form>
                            </div>
                        @endforeach
                    </div>
                    <script>
                        function deleteTask(id) {
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
