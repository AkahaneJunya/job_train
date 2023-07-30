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
                    <form action="/tasks" method="POST">
                        @csrf
                        <div class="name">
                            <h2>Name</h2>
                            <input type="text" name="task[name]" placeholder="業務名"/>
                        </div>
                        <div class="detail">
                            <h2>Detail</h2>
                            <textarea name="task[detail]" placeholder="業務の詳細、注意点"></textarea>
                        </div>
                        <input type="submit" value="store"/>
                    </form>
                    <div class="footer">
                        <a href="/task">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
