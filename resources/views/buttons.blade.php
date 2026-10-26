<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <a href="/">Home</a>
    <div class="container mx-auto">
        <button class="inline-block text-center align-middle select-none cursor-pointer
               bg-[#0d6efd] border border-[#0d6efd] text-white text-base font-normal leading-normal
               py-1.5 px-3 rounded-md transition duration-150 ease-in-out
               hover:bg-[#0b5ed7] hover:border-[#0a58ca]
               active:bg-[#0a58ca] active:border-[#0a53be]
               focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#3184fd]/50
               disabled:opacity-65 disabled:pointer-events-none">
            Click me
        </button>
    </div>
</body>
</html>
