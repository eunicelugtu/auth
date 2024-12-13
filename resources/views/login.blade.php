<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>LOG IN</title>
</head>
<body class="flex flex-col h-screen items-center justify-center bg-gradient-to-r from-cyan-200 to-indigo-600">

    <div class="p-8 w-full max-w-md bg-white rounded-lg shadow-lg justify-center">
        <h1 class="mb-4 text-3xl font-bold text-gray-800 text-center">LOGIN FORM</h1>
        <br>
        <form action="{{route('loginUser')}}" method="POST">
                @method('POST')
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="block px-3 py-2 mt-1 w-full text-sm rounded-md border border-gray-300 shadow-sm focus:ring-neutral-500 focus:border-neutral-500"
                        value="{{ old('email') }}" placeholder="Enter your email">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="block px-3 py-2 mt-1 w-full text-sm rounded-md border border-gray-300 shadow-sm focus:ring-neutral-500 focus:border-neutral-500"
                        placeholder="Enter your password">
                </div>
                <br>
                <div>
                    <button type="submit"
                        class="px-4 py-2 w-full text-sm font-medium text-white rounded-md shadow-sm bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-500">
                        Log In
                    </button>
                </div>
        </form>
    </div>
</body>
</html>