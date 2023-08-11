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
                    <h1 class="title">編集画面</h1>
                    <div class="content">
                        <form action="/tasks/{{ $task->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class='content__name'>
                                <h2>タイトル</h2>
                                <input type='text' name='name' value="{{ $task->name }}">
                            </div>
                            <div class='content__detail'>
                                <h2>本文</h2>
                                <input type='text' name='detail' value="{{ $task->detail }}">
                            </div>
                            <input type="submit" value="保存">
                        </form>
                        <div class="footer">
                            <a href="/tasks/{{ $task->id }}">戻る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
