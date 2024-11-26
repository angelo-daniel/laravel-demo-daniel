<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- @if(!Auth::check())
        <h1>You are not authenticated, please login <a href="{{ route('login1') }}">LOGIN</a>
    @else --}}
        @if(Auth::user()->hasRole('admin'))
            <h1 class="mt-5 text-center mb-5">Welcome , Administrator : <span class="text-red-500 mt-8 mb-8">{{ Auth::user()->name }}</span></h1>

            <div class="mx-auto">
                <div x-data="{ open: false }"class="text-center">
                    <button @click="open = true" class="bg-blue-500 text-white py-2 px-2 hover:">
                    Add Event
                    </button>
                <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black opacity-50 z-50">
                    <div class="w-[30%] bg-white p-6 rounded-lg shadow-lg max-w-auto border-2 border-black">
                    <div class="flex justify-between items-center">
                        <p class="text-xl font-bold">Add Event</p>
                        <button @click="open = false" class="text-black text-2xl">x (close)</button>
                </div>
                <div>
                    {{-- form --}}
                    <form action="{{ route('admin.add_event') }}" method="POST" class="mt-5">
                        {{-- event name --}}
                        @csrf
                        <div>
                            <label for="event_name" class="flex justify-start">Event</label>
                            <input type="text"
                                   name="event_name"
                                   id="event_name"
                                   value="{{ old('event_name') }}"
                                   class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700
                                            leading-tight focus:outline-none focus:shadow-outline
                                            @error('event_name') is-invalid @enderror required">
                        </div>
                        {{-- event description --}}
                        <div>
                            <label for="event_description" class="flex justify-start">Event Description</label>
                            <input type="text"
                                   name="event_description"
                                   id="event_description"
                                   value="{{ old('event_description') }}"
                                   class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700
                                            leading-tight focus:outline-none focus:shadow-outline
                                            @error('event_description') is-invalid @enderror required">
                        </div>
                        <button type="submit" class="mt-3 mb-3 bg-blue-500 text-white w-full px-2 py-2">
                            ADD EVENT
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


        @elseif(Auth::user()->hasRole('registrar'))
            <h1>Welcome , Registrar : <span class="text-red-500">{{ Auth::user()->name }}</span></h1>
        @else
            <h1>Welcome , Faculty : <span class="text-red-500">{{ Auth::user()->name }}</span></h1>
        @endif

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __(key: 'Log Out') }}
                </x-dropdown-link>
            </form>
            {{-- @endif --}}
</body>
</html>

