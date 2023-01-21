@section('page-title')
    Dashboard Home
@endsection


@extends('backend.layouts.main')

@section('admin-section')




    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <h1 style="text-align: center; font-weight: bolder">Upload Status</h1>
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">Question</th>
                <th class="border-b-2 whitespace-no-wrap">Solution</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Institution Name</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Exam Name</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Course Title</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Course Code</th>
                {{--                <th class="border-b-2 text-center whitespace-no-wrap">Status</th>--}}
                <th class="border-b-2 text-center whitespace-no-wrap">Status</th>
            </tr>
            </thead>
            <tbody>

            @foreach($questions as $question)
                <tr>
                    @php
                        $pdf = strpos($question->question_name, ".pdf");
                        $doc = strpos($question->question_name, ".doc");
                    @endphp

                    <td class="text-center border-b">
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

                    <td class="text-center border-b">
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
                    <td class="text-center border-b">{{$question->institution}}</td>
                    <td class="text-center border-b">{{$question->exam_name}}</td>
                    <td class="text-center border-b">{{$question->course_title}}</td>
                    <td class="text-center border-b">{{$question->course_code}}</td>
                    {{--<td class="w-40 border-b">
                        <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                    </td>--}}
                    <td class="border-b w-5">
                        <div class="flex sm:justify-center items-center">
                            @if($question->status == 1)
                                <a class="flex items-center mr-3" href="" style="color: green; pointer-events: none"> <span class="px-3 py-2 rounded-full bg-theme-9 text-white mr-1"> Approved </span> </a>
                            @elseif($question->status == 2)
                                <a class="flex items-center mr-3" href="" style="color: red; pointer-events: none"><span class="px-3 py-2 rounded-full bg-theme-6 text-white mr-1"> Unapproved </span> </a>
                            @else
                                <a class="flex items-center mr-3" href="" style="color: blue; pointer-events: none"> <span class="px-3 py-2 rounded-full bg-theme-1 text-white mr-1"> Requested </span>  </a>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Datatable -->



@endsection


