
@extends('layouts.app')


@section('title', 'Объекты')

@section('content')

    @include('blocks.header')

    {{ Breadcrumbs::render('cms-facilities') }}

    @include('facility.blocks.cms-list')

    @include('blocks.footer')

@endsection