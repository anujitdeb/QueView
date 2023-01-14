@section('page-title')
    Dashboard Home
@endsection


@extends('backend.layouts.main')

@section('admin-section')

    <div style=" text-align: center; display: inline">
        <div>
            <label style="font-weight: bold; font-size: 2rem;">{{$question->institution}}</label>
        </div>
        <div>
            <label style="font-weight: bold; font-size: 1.5rem;">{{$question->exam_name}}</label>
        </div>
        <div>
            <label style="font-weight: bold; font-size: 1.2rem;">{{$question->course_title}}</label>
        </div>
        <div>
            <label style="font-weight: bold; font-size: 1rem;">{{$question->course_code}}</label>
        </div>
    </div>



    @if(!$pdf && !$doc)
        <section class="w-full h-screen" style="height: max-content">
            <img
                src="{{asset('/questions/'.$question->question_name)}}"
                class="object-cover w-full h-full rounded"
                alt="Image alt text"
            />
        </section>
    @else
        <div style="text-align: center; padding-top: 10px">
            <iframe src="/questions/{{$question->question_name}}" style="height: 700px; width: 1000px;"></iframe>
        </div>
    @endif






@endsection
