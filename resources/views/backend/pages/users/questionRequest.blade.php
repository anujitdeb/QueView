@section('page-title')
    Dashboard Home
@endsection


@extends('backend.layouts.main')

@section('admin-section')



    <div class="flex flex-col mt-8">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-auto align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full text-center">
                    <thead>
                        <tr>
                            <th
                                class="text-center px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Question</th>
                            <th
                                class="text-center px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Solution</th>
                            <th
                                class="text-center px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Institution Name</th>
                            <th
                                class="text-center px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Exam Name</th>
                            <th
                                class="text-center px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Course Name</th>
                            <th
                                class="text-center px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Course Title</th>
                            <th
                                class="text-center px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Approve</th>
                            <th
                                class="text-center px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Disapprove</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white text-center">

                        @foreach($questions as $question)
                            <tr>

                                @php
                                    $pdf = strpos($question->question_name, ".pdf");
                                    $doc = strpos($question->question_name, ".doc");
                                @endphp

                                <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <a href="{{route('question-view', $question->id)}}">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">
                                                @if(!$pdf && !$doc)
                                                    <img class="w-10 h-10 rounded-full" src="{{asset('/questions/' . $question->question_name)}}"
                                                         alt="admin dashboard ui">
                                                @else
                                                    <img class="w-10 h-10 rounded-full" src="/test/question_thumbnail.jpg"
                                                         alt="admin dashboard ui">
                                                @endif
                                            </div>
                                        </div>
                                    </a>
                                </td>

                                @php
                                    $solPdf = strpos($question->solution_name, ".pdf");
                                    $solDoc = strpos($question->solution_name, ".doc");
                                @endphp

                                <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <a href="{{route('solution-view', $question->id)}}">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">
                                                @if(!$solPdf && !$solDoc)
                                                    <img class="w-10 h-10 rounded-full" src="{{asset('/solutions/' . $question->solution_name)}}"
                                                         alt="admin dashboard ui">
                                                @else
                                                    <img class="w-10 h-10 rounded-full" src="/test/question_thumbnail.jpg"
                                                         alt="admin dashboard ui">
                                                @endif
                                            </div>
                                        </div>
                                    </a>
                                </td>

                                <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">{{$question->institution}}</span>
                                </td>
                                <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">{{$question->exam_name}}</span>
                                </td>

                                <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">{{$question->course_title}}</span>
                                </td>
                                <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">{{$question->course_code}}</span>
                                </td>

                                <td
                                    class="text-center text-blue-600 px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                    <div class="pl-5 side-menu__icon"><i data-feather="smile"></i></div>
                                </td>
                                <td
                                    class="text- text-red-600 px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                    <div class="pl-5 side-menu__icon"><i data-feather="frown"></i></div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection

