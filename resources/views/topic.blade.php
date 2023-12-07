@extends('layouts.topic_app')
@section('title', 'OLINTU - Topic')
@section('content')
<section class="bg-gray-100 mx-auto">


    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                    <a href="{{ route('dashboard') }}" class="flex ms-2 md:me-24">
                        <img src="{{ asset('images/logo.png') }}" class="h-8 me-3" alt="Olintu Logo" />
                    </a>
                </div>
                @if ($isStudent)
                @php
                $userAttributes = json_decode($userAttributesJson, true);
                @endphp
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="{{ asset('images/user-icon.png') }}" alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    {{ $userAttributes['FIRST_NAME'] . ' ' . $userAttributes['LAST_NAME']}}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    Student #: {{ $userAttributes['STUDENT_NUMBER'] }}
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="{{ route('settings') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopic(1);" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Introduction to PHP</span>
                    </a>
                    <ul>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(1, 'features');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Features</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(1, 'syntax');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Syntax</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(1, 'comments');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Comments</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(1, 'sensitive');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Case sensitive</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(1, 'variables');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Variables</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(1, 'datatypes');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Datatypes</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(1, 'constants');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Constants</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopic(2)" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">PHP Installation</span>
                    </a>
                    <ul>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(2, 'setup');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">How to setup PHP</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopic(3)" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">PHP Common Use</span>
                    </a>
                </li>
                <li>
                    <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopic(4)" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Introduction to Array</span>
                    </a>
                    <ul>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(4, 'index');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Numeric/Index arrays</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(4, 'asso');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Associative arrays</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(4, 'multidimentional');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Multidimensional arrays</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(4, 'strings');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Strings</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(4, 'func');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Functions</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopic(5)" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Web Concepts</span>
                    </a>
                    <ul>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(5, 'concepts');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Browser and Platform</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(5, 'forms');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">HTML Forms</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(5, 'method');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">get and set method</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(5, 'inclusion');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">PHP file inclusion</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(5, 'inputout');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">PHP file I/O</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(5, 'cookies');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">PHP Cookies</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopic(6)" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Advanced PHP</span>
                    </a>
                    <ul>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(6, 'variables');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Predefined variables</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(6, 'regular');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Regular expressions</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(6, 'perl');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">PHP regex perl</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(6, 'debugging');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Debugging</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(6, 'date');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Date and Time</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopic(7)" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Database Connection</span>
                    </a>
                    <ul>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(7, 'database');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Opening Database</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(7, 'closing');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Closing Database</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(7, 'insert');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Insert Data</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(7, 'getting');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Getting Data</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(7, 'releasing');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Releasing Memory</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(7, 'paging');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Paging through PHP</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(7, 'update');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Updating Data</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(7, 'delete');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Delete Data</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopic(8)" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">OOP Concept</span>
                    </a>
                    <ul>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(8, 'class');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Class and Objects</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(8, 'objects');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Creating Objects in PHP</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(8, 'inheritance');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Inheritance</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(8, 'interface');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Interface</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(8, 'abstract');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Abstract Classes</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(8, 'abstract_vs_interface');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Abstract vs. Interface</span>
                            </a>
                        </li>
                        <li>
                            <a data-drawer-hide="logo-sidebar" href="#" onclick="loadTopicAndSection(8, 'constructor');" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Constructor Functions</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64" style="height: 100vh;">
        <div class="p-4 rounded-lg mt-14" style="height: 80vh;">
            <div id="topicDiv" class="flex rounded bg-gray-50 dark:bg-gray-800" style="height: 80vh;">
            </div>
        </div>
    </div>
</section>

<script>
    // Global variable to store the current topic value
    // Access the global variable
    var currentTopic = @json($dashboardTopic).selectedTopic;
    var isTopicCompleted = false;
    var topicProgress;

    // Check if the variable is defined, otherwise use the default value
    if (typeof currentTopic === 'undefined') {
        currentTopic = 1;
    }
    validateCompletedTopic(currentTopic);
    // Use JavaScript to load the URL into the specified div
    var url = "{{ route('open.topic', ['value' => ':dynamicValue']) }}";
    url = url.replace(':dynamicValue', currentTopic);
    // Set the inner HTML of the element with the generated URL
    document.getElementById('topicDiv').innerHTML = '<iframe id="topicFrame" src="' + url + '" width="100%" height="100%"></iframe>';
    var iframe = document.getElementById('topicFrame');
    iframe.onload = function() {
        var iframeContentWindow = iframe.contentWindow;
        var quizBtn = iframeContentWindow.document.getElementById('quiz-btn');
        var quizBtnDisabled = iframeContentWindow.document.getElementById('quiz-btn-disabled');

        if (isTopicCompleted) {
            quizBtnDisabled.remove();
        } else {
            quizBtn == null ? quizBtn : quizBtn.remove();
        }
    };

    function loadTopic(val) {
        validateCompletedTopic(val);
        // Check if the new value is different from the current one
        if (val !== currentTopic) {
            // Update the global variable with the new value
            currentTopic = val;
            // Use JavaScript to load the URL into the specified div
            document.getElementById('topicDiv').innerHTML = '';
            var url = "{{ route('open.topic', ['value' => ':dynamicValue']) }}";
            url = url.replace(':dynamicValue', val);
            // Set the inner HTML of the element with the generated URL
            loadedTopic = document.getElementById('topicDiv').innerHTML = '<iframe id="topicFrame" src="' + url + '" width="100%" height="100%"></iframe>';
            var iframe = document.getElementById('topicFrame');
            iframe.onload = function() {
                var iframeContentWindow = iframe.contentWindow;
                var quizBtn = iframeContentWindow.document.getElementById('quiz-btn');
                var quizBtnDisabled = iframeContentWindow.document.getElementById('quiz-btn-disabled');
                console.log("isTopicCompleted " + isTopicCompleted);
                if (isTopicCompleted) {
                    quizBtnDisabled.remove();
                } else {
                    quizBtn == null ? quizBtn : quizBtn.remove();
                }
            };
        }
    }


    function loadTopicAndSection(val, section) {
        validateCompletedTopic(val);
        // Check if the new value is different from the current one
        if (val !== currentTopic) {
            // Update the global variable with the new value
            currentTopic = val;
            // Use JavaScript to load the URL into the specified div
            document.getElementById('topicDiv').innerHTML = '';
            var url = "{{ route('open.topic', ['value' => ':dynamicValue']) }}";
            url = url.replace(':dynamicValue', val);
            // Set the inner HTML of the element with the generated URL
            document.getElementById('topicDiv').innerHTML = '<iframe id="topicFrame" src="' + url + '" width="100%" height="100%"></iframe>';
            var iframe = document.getElementById('topicDiv').getElementsByTagName("iframe")[0];
            // Wait for the iframe to load
            iframe.onload = function() {
                handleScrollSection(section);
            }

            var iframeTopic = document.getElementById('topicFrame');
            iframeTopic.onload = function() {
                var iframeContentWindow = iframeTopic.contentWindow;
                var quizBtn = iframeContentWindow.document.getElementById('quiz-btn');
                var quizBtnDisabled = iframeContentWindow.document.getElementById('quiz-btn-disabled');


                if (isTopicCompleted) {
                    quizBtnDisabled.remove();
                } else {
                    quizBtn == null ? quizBtn : quizBtn.remove();
                }
            };
        } else {
            handleScrollSection(section);
        }
    }

    function validateCompletedTopic(topic) {
        fetch("{{ route('validate.topic') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for Laravel security
                },
                body: JSON.stringify({
                    currentTopic: topic
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    isTopicCompleted = data.result;
                } else {
                    console.error('Error:', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function handleScrollSection(section) {
        var elementInsideIframe = document.getElementById('topicDiv').getElementsByTagName("iframe")[0].contentDocument.getElementById(section);

        // Scroll to the specified div inside the iframe
        if (elementInsideIframe) {
            elementInsideIframe.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }
</script>
@endsection