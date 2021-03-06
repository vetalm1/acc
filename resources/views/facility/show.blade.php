@extends('layouts.app')


@section('title', 'Объект')

@section('content')

    @include('blocks.header')

    {{ Breadcrumbs::render('facility', $facility) }}

    @include('facility.blocks.item')

    @include('blocks.footer')

@endsection