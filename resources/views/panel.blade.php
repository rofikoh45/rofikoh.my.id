<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BACK END</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#7A7A7A]">
    <div class="flex justify-center h-screen w-screen items-center">
     <form method="POST" class="w-full md:w-1/2 flex flex-col items-center " >
         @csrf
         <h1 class="text-center text-4xl font-bold text-white mb-6">ROFIKOH <span class="text-yellow-400">BACKEND</span></h1>
         <!-- email input -->
         <div class="w-3/4 mb-6">
             <input type="username" name="username" id="username" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-[#E4842C]" placeholder="Username">
         </div>
         <!-- password input -->
         <div class="w-3/4 mb-6">
             <input type="password" name="password" id="password" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-[#E4842C] " placeholder="Password">
         </div>
         
         <div class="w-3/4 mt-4">
             <button type="submit" class="py-4 bg-yellow-400 w-full rounded text-white font-bold hover:bg-[#E4842C]"> LOGIN</button>
         </div>
     </div>
    </div>
 </body>
</html>