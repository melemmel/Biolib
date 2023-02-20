<!-- component -->
@include('partials.header')
@include('loader')
<div class="relative min-h-screen flex ">
    <div
        class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 bg-white">
        <div class="sm:w-1/2 xl:w-2/5 h-full hidden md:flex flex-auto items-center justify-start p-10 overflow-hidden bg-purple-900 text-white bg-no-repeat bg-cover relative"
            style="background-image: url('/images/4907599.jpg');">
            <div class="absolute bg-gradient-to-b from-blue-900 to-gray-900 opacity-75 inset-0 z-0"></div>
            <div class="absolute triangle  min-h-screen right-0 w-16" style=""></div>
            <img src="" class="h-96 absolute right-5 mr-5">
            <div class="w-full  max-w-md z-10">
                <div class="sm:text-4xl xl:text-5xl font-bold leading-tight mb-6">
                    LPNHS Library Management System
                </div>
                <div class="sm:text-sm xl:text-md text-gray-200 font-normal">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Neque et voluptates obcaecati tenetur enim! Exercitationem consequatur est
                    eligendi, consectetur modi doloremque aut ullam provident officia reiciendis accusantium suscipit
                    magni animi?</div>
            </div>
        </div>
        <div
            class="md:flex md:items-center md:justify-center w-full sm:w-auto md:h-full w-2/5 xl:w-2/5 p-8  md:p-10 lg:p-14 sm:rounded-lg md:rounded-none bg-white ">
            <div class="max-w-md w-full space-y-8">
                <div class="text-center">
                    <h2 class="mt-6 text-3xl font-bold text-gray-900">
                        Welcome Back!
                    </h2>
                    <p class="mt-2 text-sm text-gray-500">Please sign in to your account</p>
                </div>

                <form class="mt-8 space-y-6" action="#" method="POST">
                    <input type="hidden" name="remember" value="true">
                    <div class="relative">
                        <div class="absolute right-3 mt-4"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Username</label>
                        <input
                            class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                            type="" placeholder="" value="">
                    </div>
                    <div class="mt-8 content-center">
                        <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                            Password
                        </label>
                        <input
                            class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                            type="" placeholder="Enter your password" value="*****">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember_me" type="checkbox"
                                class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>
                        <div class="text-sm">
                            <a href="#" class="text-indigo-400 hover:text-blue-500">
                                Forgot your password?
                            </a>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600  hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-4  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/js/app.js"></script>
