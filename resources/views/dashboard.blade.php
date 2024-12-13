<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body class="flex flex-col h-screen items-center justify-center bg-gradient-to-r from-cyan-200 to-indigo-600">

    <div class="p-6 w-full max-w-2xl text-center bg-white rounded-lg shadow-lg justify-center">

        <h1 class="mb-4 text-3xl font-bold text-gray-800">Welcome to Your Dashboard, {{ Auth::user()->name }}!</h1>
        <p class="mb-6 text-gray-600">
            We're glad to have you back. Explore your account or log out when you're done.
        </p>

        <div class="flex gap-4 justify-center mb-4">
            @if (Auth::user()->profile)
                <div class="p-1 bg-gradient-to-t from-blue-400 to-indigo-600 rounded-lg ">
                    <div class="p-4 text-left border-2 bg-white rounded-lg shadow-md">
                        <h3 class="mb-2 text-lg font-semibold text-gray-800">Profile Information</h3>
                        <hr class=" h-1 bg-slate-400 opacity-40">
                        <div class="space-y-1">
                            <p class="text-gray-700"><span class="font-medium text-gray-900">Id:</span>
                                {{ Auth::id() }}</p>
                            <p class="text-gray-700"><span class="font-medium text-gray-900">Email:</span>
                                {{ Auth::user()->email }}</p>
                            <p class="text-gray-700"><span class="font-medium text-gray-900">Birthday:</span>
                                {{ Auth::user()->profile->birthday }}</p>
                            <p class="text-gray-700"><span class="font-medium text-gray-900">Bio:</span>
                                {{ Auth::user()->profile->bio }}</p>
                            <p class="text-gray-700"><span class="font-medium text-gray-900">Contact Number:</span>
                                {{ Auth::user()->profile->contact_number }}</p>
                        </div>
                        </div>
                </div>
            @else
                <a href="{{route('profileForm')}}" class="mx-auto w-24 px-1 py-2 text-sm font-medium text-white rounded-md shadow-sm bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-500">
                    
                    Create Profile
                </a>



            @endif
        </div>

        <form action="{{route('logout')}}" method="POST" class="mx-auto w-24 px-1 py-2 text-sm font-medium text-white rounded-md shadow-sm bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-500">
            @method('POST')
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>