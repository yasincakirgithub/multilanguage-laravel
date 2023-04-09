@extends('layout')

@section('title', 'About')

@section('bodyclass', 'sub_page')


@section('content')

    @include('components.about-section',['about' => $about])

@endsection
