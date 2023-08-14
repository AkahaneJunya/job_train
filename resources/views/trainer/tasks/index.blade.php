<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rating') }}
        </h2>
    </x-slot>
    
   <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>{{ $newcomer->user->name }}</h1>
                    <div class='tasks'>
                        @foreach ($ratings as $rating)
                            <div class='rating'>
                                <h2 class='task_name'>
                                    {{ $rating->task->name }}
                                </h2>
                                <p class='detail'>{{ $rating->task->detail }}</p>
                                <form method="POST" action="/trainer/newcomers/{{ $rating->id }}/update">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="newcomer" value="{{ $newcomer->id }}">
                                    <select name="trainer_rate" id="trainer_rate">
                                        @for ($i = 0; $i <= 5; $i++)
                                            <option value="{{ $i }}" {{ old('trainer_rate', $rating->trainer_rate) == $i ? 'selected' : '' }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <button type="submit">評価更新</button>
                                </form>
                                <p class="newcomer_rate">Newcomer Rate: {{ $ratings->where('task_id', $rating->task->id)->first()->newcomer_rate }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="footer">
                        <a href="/trainer/newcomer">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
