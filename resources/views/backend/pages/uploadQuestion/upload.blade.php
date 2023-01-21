@section('page-title')
    Upload Question
@endsection


@extends('backend.layouts.main')

@section('admin-section')
@include('backend.layouts.partials.alerts')
<div class="intro-y box mt-5">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
        <h2 class="font-medium text-base mr-auto" style="font-weight: bold">
            Upload your Question
        </h2>
    </div>
    <div class="p-5" id="horizontal-form">
        <form action="{{ route('question-upload.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="preview" style="">
                <div class="flex flex-col sm:flex-row items-center">
                    <label class="sm:w-15 sm:text-right sm:mr-5">Institution Name</label>
                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Ex: State University of Bangladesh" name="institution">
                </div>
                <div class="flex flex-col sm:flex-row items-center">
                    <label class="sm:w-15 sm:text-right sm:mr-5">Course Name</label>
                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Ex: Hrithik Roshan" name="courseTitle">
                </div>
                <div class="flex flex-col sm:flex-row items-center">
                    <label class="sm:w-15 sm:text-right sm:mr-5">Course Code</label>
                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Ex: CSE-0103" name="courseCode">
                </div>
                <div class="flex flex-col sm:flex-row items-center">
                    <label class="sm:w-13 sm:text-right sm:mr-5">Exam Name</label>
                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Ex: Mid term exam" name="examName">
                </div>


                <div class="flex flex-col sm:flex-row items-center">
                    <label class="sm:w-15 sm:text-right sm:mr-5">Upload Question</label>
                    <input type="file" class="form-control input w-full border mt-2 flex-1" name="question">
                </div>

                <div class="flex flex-col sm:flex-row items-center">
                    <label class="sm:w-15 sm:text-right sm:mr-5">Upload Solution <span class="font-thin" style="color: blue"> (If any)</span></label>
                    <input type="file" class="input w-full border mt-2 flex-1" name="solution">
                </div>
                <div class="hidden">
                    <input type="" class="" name="user_id" value="{{session('user.id')}}" />
                </div>

                <div class="sm:ml-15 sm:pl-5 mt-5">
                    <input type="submit" class="button bg-theme-1 text-white" value="Upload Request" />
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
