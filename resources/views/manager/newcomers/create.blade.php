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
                            <input type="text" name="name" placeholder="名前" value="{{ old('name') }}"/>
                            <p class="name__error" style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                        <div class="email">
                            <h2>Email</h2>
                            <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}"/>
                            <p class="email__error" style="color:red">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="password">
                            <h2>Password</h2>
                            <input type="password" name="password" placeholder="パスワード"/>
                            <p class="password__error" style="color:red">{{ $errors->first('password') }}</p>
                        </div>
                        <div class="entering_date">
                            <h2>Entering Date</h2>
                            <input type="date" name="entering_date"/ value="{{ old('entering_date') }}">
                            <p class="entering_date_date__error" style="color:red">{{ $errors->first('entering_date') }}</p>
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