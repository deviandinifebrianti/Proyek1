
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/resources/js/loginscript.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/resources/js/tampilpassword.js">
</head>

<body>
    <section class="bg-[#CFF5E7] min-h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="bg-white flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
            <!-- form -->
            <div class="md:w-1/2 px-8 md:px-16">
                <img class="h-auto w-2x " src="{{asset('/img/login/logo.png')}}" alt="image description"><br>
                <p class="font-Roboto 	font-weight: 400; text-lg text-[#4A4543]">Welcome Back</p>
                <p class="font-Roboto font-weight: 400; text-xs text-[#808080]">Welcome back! Please enter your details.</p>
                <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-4">
                    @csrf

                    <input class="p-2 mt-8  rounded-xl border @error('username') is-invalid @enderror" type="username" name="username" placeholder="Enter your username">
                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    </span>
                                @enderror
                    <div class="relative">
                        <!-- <label for="" class="font-normal font-medium text-sm leading-4 text-gray-700 mt-4">Password</label> -->
                        <input class="p-2 rounded-xl border w-full @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter your password">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    </span>
                                @enderror
                    </div>

                    <button class="bg-[#00B074] rounded-xl text-white py-2 hover:scale-105 duration-300">Sign in</button>
                </form>
<!-- 
                <div class="flex items-center mb-4">
                    <input checked id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember fo 30 days <a href="#" class="text-blue-600 hover:underline dark:text-blue-500 "></a>.</label>
                </div> -->
            </div>
           
   <!-- image -->
    <div class="md:block hidden w-1/2">
      <img class="rounded-2xl" src="{{asset('/img/login/bg-login.png')}}">
    </div>
</body>

</html>
