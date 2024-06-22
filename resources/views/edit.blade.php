<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Todo</title>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex flex-col justify-center items-center min-h-screen bg-gray-50 py-20">
    <div id="content" class="w-full max-w-md mx-auto">
        <div class="container py-6 mx-auto">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div id="edit-form" class="border-b-4 border-purple-500 pb-4 mb-4">
                    <h2 class="font-semibold text-xl text-purple-700 mb-5">Edit Todo</h2>
                    <form method="POST" action="{{ route('todo.update', $todo->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <input type="text" name="name" value="{{ $todo->name }}"
                                class="bg-purple-100 text-gray-800 text-sm rounded block w-full p-2.5 focus:outline-none focus:ring-2 focus:ring-purple-500" />
                        </div>
                        <button type="submit"
                            class="px-4 py-2 bg-purple-500 text-white font-semibold rounded hover:bg-purple-600">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
