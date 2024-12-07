<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <h1>DASHBOARD</h1>

    <div class="p-6 w-full max-w-2xl text-center bg-white rounded-lg shadow-lg">
        <div class="container">
            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
                    <button class="float-right text-green-700"
                        onclick="this.parentElement.style.display='none'">&times;</button>
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <h1 class="mb-4 text-3xl font-bold text-gray-800">Welcome to Your Dashboard, {{ Auth::user()->name }}!</h1>
        <p class="mb-6 text-gray-600">
            We're glad to have you back. Explore your account or log out when you're done.
        </p>

        <div class="flex gap-4 justify-center mb-4">
            @if (Auth::user()->profile)
                <div class="p-6 text-left bg-white rounded-lg shadow-md">
                    <h3 class="mb-4 text-lg font-semibold text-gray-800">Profile Information</h3>
                    <div class="space-y-3">
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
            @endif
        </div>

        <form action="{{route('profileForm')}}" method="GET">
            @method('GET')
            <button type="submit">Create Profile</button>
        </form>

        <form action="{{route('logout')}}" method="POST">
            @method('POST')
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>