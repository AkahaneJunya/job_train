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
                    <h1 class="title">編集画面</h1>
                    <div class="content">
                        <form action="/manager/newcomers/{{ $newcomer->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class='name'>
                                <h2>Name</h2>
                                <input type='text' name='name' value="{{ $newcomer->user->name }}">
                            </div>
                            <div class='email'>
                                <h2>Email</h2>
                                <input type='email' name='email' value="{{ $newcomer->user->email }}">
                            </div>
                            <div class='entering_date'>
                                <h2>Entering Date</h2>
                                <input type='date' name='entering_date' value="{{ $newcomer->entering_date }}">
                            </div>
                            <input type="submit" value="保存">
                        </form>
                        <div class="footer">
                            <a href="/manager/newcomers/{{ $newcomer->id }}">戻る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
