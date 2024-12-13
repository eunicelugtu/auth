<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Create Profile</title>
</head>
<body class="flex flex-col h-screen items-center justify-center bg-gradient-to-r from-cyan-200 to-indigo-600">
    
    <div class="p-8 w-full max-w-md bg-white rounded-lg shadow-lg justify-center">
                
        <h1 class="mb-4 text-3xl font-bold text-gray-800 text-center">CREATE PROFILE</h1>

        <form action="{{route('storeProfile')}}" method="POST">
                @method('POST')
                @csrf
                <div>
                    <label for="birthday" class=" text-sm font-medium text-gray-700">Birthday</label>
                    <input type="date" name="birthday" id="birthday" required
                        class="block px-3 py-2 mt-1 w-full text-sm rounded-md border border-gray-300 shadow-sm focus:ring-neutral-500 focus:border-neutral-500"
                        placeholder="Enter your birthday">
                </div>
                <div>
                    <label for="bio" class=" text-sm font-medium text-gray-700">Bio</label>
                    <input type="text" name="bio" id="bio" required
                        class="block px-3 py-2 mt-1 w-full text-sm rounded-md border border-gray-300 shadow-sm focus:ring-neutral-500 focus:border-neutral-500"
                        placeholder="Enter your bio">
                </div>
                <div>
                    <label for="contact_number" class=" text-sm font-medium text-gray-700">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" required
                        class="block px-3 py-2 mt-1 w-full text-sm rounded-md border border-gray-300 shadow-sm focus:ring-neutral-500 focus:border-neutral-500"
                        placeholder="Enter your Contact Number">
                </div>
                <div class="text-center">
                    <button type="submit"
                    class="mt-4 px-4 py-2 w-36 text-sm font-medium text-white rounded-md shadow-sm bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-500">
                        Create Profile
                    </button>
                </div>
        </form>
    </div>
</body>
</html>