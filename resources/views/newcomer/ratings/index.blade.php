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
                                <p class="newcomer_rate">Newcomer Rate {{ $ratings->where('task_id', $rating->task->id)->first()->newcomer_rate }}</p>
                                <p class="trainer_rate">Trainer Rate {{ $ratings->where('task_id', $rating->task->id)->first()->trainer_rate }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
