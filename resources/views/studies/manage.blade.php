
@extends('layout')

    @section('content')
        @include('partials._navbar')

        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <header>
                <h1
                    class="text-3xl text-center font-bold my-6 uppercase"
                >
                    Manage Studies
                </h1>
            </header>
            @unless($studies->isEmpty())
            @foreach($studies as $study)
            <table class="w-full table-auto rounded-sm">
                <tbody>
                <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a href="/studies/{{$study->id}}">
                            {{$study->title}}
                        </a>
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a
                            href="/studies/{{$study->id}}/edit"
                            class="text-blue-400 px-6 py-2 rounded-xl"
                        ><i
                                class="fa-solid fa-pen-to-square"
                            ></i>
                            Edit</a
                        >
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <form method="POST" action="/studies/{{$study->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach

                @else
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <p class="text-center">
                                You are not assigned to any studies, if this is not correct please contact : test@test.com!
                            </p>
                        </td>
                    </tr>
                    @endunless
                </tbody>
            </table>
        </div>

