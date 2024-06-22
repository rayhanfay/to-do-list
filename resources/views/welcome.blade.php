<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Todo List</title>
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col justify-center items-center min-h-screen bg-gray-50 py-20">
    <div id="content" class="w-full max-w-md mx-auto">
        <div class="container py-6 mx-auto">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div id="create-form" class="border-b-4 border-purple-500 pb-4 mb-4">
                    <h2 class="font-semibold text-xl text-purple-700 mb-5">Buat Todo List</h2>
                    <form method="POST" action="/todo">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-700">*Todo</label>
                            <input type="text" placeholder="Masukkan Todo..." name="name"
                                class="bg-purple-100 text-gray-800 text-sm rounded block w-full p-2.5 focus:outline-none focus:ring-2 focus:ring-purple-500" />
                        </div>
                        <button type="submit"
                            class="px-4 py-2 bg-purple-500 text-white font-semibold rounded hover:bg-purple-600">Create
                            +</button>
                    </form>
                </div>
                <div id="todos-list">
                    @foreach ($todos as $todo)
                        <div class="todo mb-5 bg-white shadow-md rounded-lg p-5 border-b-4 border-purple-500">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $todo->name }}</h3>
                                <div class="flex items-center space-x-3">
                                    <!-- Edit icon -->
                                    <a href="{{ route('todo.edit', $todo->id) }}"
                                        class="text-sm text-blue-500 font-semibold rounded hover:text-blue-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </a>
                                    <!-- Delete icon -->
                                    <form action="{{ route('todo.destroy', $todo->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-sm text-red-500 font-semibold rounded hover:text-red-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c1.18.037 2.09 1.022 2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>
