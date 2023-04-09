@extends('layout')

@section('title', 'Homepage')

@section('bodyclass', '')


@section('slider')

    @include('components.slider-section', ['slider_objects' => $slider_objects])

@endsection


@section('content')

    @include('components.about-section', ['about' => $about])

    {{--  @include('components.trending-section')

    @include('components.discount-section')

    @include('components.brand-section') --}}

    @include('components.contact-section')

    {{--  @include('components.client-section') --}}


@endsection


