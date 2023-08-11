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
                    <a href='/manager/newcomers/create'>create</a>
                    <div class='newcomers'>
                        @foreach ($newcomers as $newcomer)
                            <div class='newcomer'>
                                <h2 class='name'>
                                    <a href="/manager/newcomers/{{ $newcomer->id }}">{{ $newcomer->user->name }}</a>
                                </h2>
                                <h3>新人入社日</h3>
                                <p class='entering_date'>{{ $newcomer->entering_date }}</p>
                                <form action="/manager/newcomers/{{ $newcomer->id }}" id="form_{{ $newcomer->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="deleteNewcomer({{ $newcomer->id }})">delete</button> 
                                </form>
                            </div>
                        @endforeach
                    </div>
                    <script>
                        function deleteNewcomer(id) {
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