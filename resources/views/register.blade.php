<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>
<body class="flex flex-col h-screen items-center justify-center bg-gradient-to-r from-cyan-200 to-indigo-600">
    
    <div class="p-8 w-full max-w-md bg-white rounded-lg shadow-lg justify-center">

        <h1 class="mb-4 text-3xl font-bold text-gray-800 text-center">REGISTER FORM</h1>
        <form action="{{ route('registeredUser') }}" method="POST" class="space-y-4">
                @method('POST')
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" required
                        class="block px-3 py-2 w-full text-sm rounded-md border border-gray-300 shadow-sm focus:ring-neutral-500 focus:border-neutral-500"
                        value="{{ old('name') }}" placeholder="Enter your name">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="block px-3 py-2 w-full text-sm rounded-md border border-gray-300 shadow-sm focus:ring-neutral-500 focus:border-neutral-500"
                        value="{{ old('email') }}" placeholder="Enter your email">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="block px-3 py-2 w-full text-sm rounded-md border border-gray-300 shadow-sm focus:ring-neutral-500 focus:border-neutral-500"
                        placeholder="Enter your password">
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                        Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="block px-3 py-2 w-full text-sm rounded-md border border-gray-300 shadow-sm focus:ring-neutral-500 focus:border-neutral-500"
                        placeholder="Confirm your password">
                </div>
                <div>
                    <button type="submit"
                    class="px-4 py-2 w-full text-sm font-medium text-white rounded-md shadow-sm bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-500">
                        Register
                    </button>
                </div>
        </form>
    </div>
</body>
</html>