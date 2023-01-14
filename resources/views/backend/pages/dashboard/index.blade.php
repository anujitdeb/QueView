@section('page-title')
    Dashboard Home
@endsection


@extends('backend.layouts.main')

@section('admin-section')

    {{--Searchbox Start--}}
    <form action="{{route('search')}}" method="get">
        @csrf
        <div class="main"  style="padding-bottom: 30px">
            <!-- hero -->
            <div class="hero">

                <!-- image search box -->
                <div class="box" >
                    <div class="box-wrapper">

                        <div class=" bg-white rounded flex items-center w-full shadow-sm border border-gray-200">
                            <button @click="getImages()" class="p-3 outline-none focus:outline-none"><svg class=" w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
                            <input type="search" name="search" id="" @keydown.enter="getImages()" placeholder="Search for Questions..." x-model="q" class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent" style="height: 40px">
                            {{--<div class="select">
                                <select name="category" id="" x-model="image_type" class="text-sm outline-none focus:outline-none bg-transparent">
                                    <option value="all" selected>All</option>
                                    <option value="university">University</option>
                                    <option value="examName">Exam Name</option>
                                    <option value="courseTitle">Course Title</option>
                                    <option value="courseCode">Course Code</option>
                                </select>
                            </div>--}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>

    {{--Searchbox End--}}


    {{--Auto Sliding Pictures Start--}}

    <div class="sliderAx h-auto">
        <div id="slider-3" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill rounded-lg shadow-2xl 2xl:shadow-inner" style="background-image: url('/sliding_pictures/one.jpg')">
                <div class="md:w-1/2">
                    <p class="font-bold text-sm uppercase">Query?</p>
                    <p class="text-3xl font-bold">Then Search !!!</p>
                    <p class="text-2xl mb-10 leading-none">Question & Solution</p>
{{--                    <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>--}}
                </div>
            </div> <!-- container -->
            <br>
        </div>

        <div id="slider-5" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill rounded-lg shadow-2xl 2xl:shadow-inner" style="background-image: url('/sliding_pictures/two.png')">

                <p class="font-bold text-sm uppercase">Query?</p>
                <p class="text-3xl font-bold">Then Search !!!</p>
                <p class="text-2xl mb-10 leading-none">Question & Solution</p>
{{--                <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>--}}

            </div> <!-- container -->
            <br>
        </div>

        <div id="slider-1" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill rounded-lg shadow-2xl 2xl:shadow-inner" style="background-image: url('/sliding_pictures/three.jpg')">

                <p class="font-bold text-sm uppercase">Query?</p>
                <p class="text-3xl font-bold">Then Search !!!</p>
                <p class="text-2xl mb-10 leading-none">Question & Solution</p>
                {{--                <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>--}}

            </div> <!-- container -->
            <br>
        </div>

        <div id="slider-4" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill rounded-lg shadow-2xl 2xl:shadow-inner" style="background-image: url('/sliding_pictures/four.jpg')">

                <p class="font-bold text-sm uppercase">Query?</p>
                <p class="text-3xl font-bold">Then Search !!!</p>
                <p class="text-2xl mb-10 leading-none">Question & Solution</p>
                {{--                <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>--}}

            </div> <!-- container -->
            <br>
        </div>

        <div id="slider-2" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill rounded-lg shadow-2xl 2xl:shadow-inner" style="background-image: url('/sliding_pictures/five.jpg')">

                <p class="font-bold text-sm uppercase">Query?</p>
                <p class="text-3xl font-bold">Then Search !!!</p>
                <p class="text-2xl mb-10 leading-none">Question & Solution</p>
                {{--                <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>--}}

            </div> <!-- container -->
            <br>
        </div>

        <div id="slider-6" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-black py-24 px-10 object-fill rounded-lg shadow-2xl 2xl:shadow-inner" style="background-image: url('/sliding_pictures/six.jpg')">

                <p class="font-bold text-sm uppercase">Query?</p>
                <p class="text-3xl font-bold">Then Search !!!</p>
                <p class="text-2xl mb-10 leading-none">Question & Solution</p>
                {{--                <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>--}}

            </div> <!-- container -->
            <br>
        </div>
    </div>
    <div  class="flex justify-between w-12 mx-auto pb-2">{{--
        <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>--}}
    </div>

    {{--Auto Sliding Pictures End--}}


    {{--Question Card Start--}}
    <h2 style=" padding-bottom: 10px"><span style="font-weight: bold; font-size: 1rem">Important Questions :</span></h2>

    <div class="pt-0 p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        @foreach($questions as $question)
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center pb-10"  style="padding-top: 30px">

                    @php
                        $pdf = strpos($question->question_name, ".pdf");
                        $doc = strpos($question->question_name, ".doc");
                    @endphp

                    @if(!$pdf && !$doc)
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('/questions/'.$question->question_name)}}" alt="image"/>
                    @else
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/test/question_thumbnail.jpg" alt="image"/>
                    @endif
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$question->institution}}</h5>
                    <span class="text-sm text-black dark:text-gray-400">{{$question->exam_name}}</span>
                    <span class="text-sm text-blue-700 dark:text-gray-400">{{$question->course_title}}</span>
                    <span class="text-sm text-blue-700 dark:text-gray-400">{{$question->course_code}}</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="{{route('question-view', $question->id)}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Question</a>
                        <a href="{{route('solution-view', $question->id)}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-green-700 border border-green-300 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:text-white dark:border-green-700 dark:hover:bg-green-700 dark:hover:border-green-700 dark:focus:ring-green-700">Solution</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{--Question Card End--}}



@endsection
