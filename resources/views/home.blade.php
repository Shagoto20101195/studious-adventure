<!DOCTYPE html>
<html>
<head>
    <title>LF - {{ $name }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    
</head>
<body>
    <div class="bg-sky-200 text-center py-5 text-xl">
        <h1 class="text-3xl">Lost & Found</h1>
        <br><br><br>
        <h4 class="italic">Your Place To Go For All Sorts Of Missing Or Retrieved Items</h4>
    </div>

    <form action="{{ route('home') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="p-20 grid justify-items-center">
            <div>
                <label for="desc">Description</label>
                <input type="text" name="desc" id="desc" class="border-2 border-gray-300 p-2 rounded-lg" required>
            </div>
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="border-2 border-gray-300 p-2 rounded-lg" required>
            </div>
            <div>
                <label for="type">Type</label>
                <select name="type" id="type" class="border-2 border-gray-300 p-2 rounded-lg" required>
                    <option value="missing">Missing</option>
                    <option value="retrieved">Retrieved</option>
                </select>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>