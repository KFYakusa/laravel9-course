@extends('layouts.app')
@section('title', 'Listagem usuário')


@section('content')

    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table>
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Name
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Email
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    <a href="{{ route('user.createPage') }}"> + </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="whitespace-nowrap">
                                {{-- <div class="container flex justify-center items-center mx-auto"> --}}
                                    <form action="{{ route('user.getListUser') }}" method="get">

                                        <div class="relative">
                                            <div class="absolute top-4 left-4"> <i
                                                    class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i> </div>
                                            <input type="text" name="search" placeholder="Search"
                                                class="h-14 w-96 pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none">
                                            <div class="absolute top-2 right-2"> <button
                                                    class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                {{-- </div> --}}
                            </tr>
                            @foreach ($users as $user)
                                <tr class="whitespace-nowrap">

                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            {{ $user->name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('user.getUser', ['id' => $user->id]) }}"
                                            class="px-4 py-1 text-sm text-white bg-red-400 rounded">Details</a>
                                    </td>
                                </tr>
                                {{-- <li>
                                    {{ $user->name }} - {{ $user->email }}

                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        <a href="{{ route('user.getUser', ['id' => $user->id]) }}"> Details </a>
                                    </button>

                                </li> --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




@endsection


</ul>
