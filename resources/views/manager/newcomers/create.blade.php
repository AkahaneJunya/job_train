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
                    <form action="/manager/newcomers" method="POST">
                        @csrf
                        <div class="name">
                            <h2>Name</h2>
                            <input type="text" name="name" placeholder="名前"/>
                        </div>
                        <div class="email">
                            <h2>Email</h2>
                            <input type="email" name="email" placeholder="メールアドレス"/>
                        </div>
                        <div class="password">
                            <h2>Password</h2>
                            <input type="password" name="password" placeholder="パスワード"/>
                        </div>
                        <div class="entering_date">
                            <h2>Entering Date</h2>
                            <input type="date" name="entering_date"/>
                        </div>
                        <input type="submit" value="store"/>
                    </form>
                    <div class="footer">
                        <a href="/manager/newcomer">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>