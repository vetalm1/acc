@extends('layouts.app')


@section('title', 'Объект')

@section('content')

    @include('blocks.header')

    {{ Breadcrumbs::render('cms-facility', $facility) }}

    @include('facility.blocks.cms-item')

    @include('blocks.footer')

@endsection