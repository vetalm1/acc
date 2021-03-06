@extends('layouts.app')


@section('title', 'Добавление прибора')

@section('content')

    @include('blocks.header')

    {{ Breadcrumbs::render('device-create', $facility) }}

    @include('device.blocks.forms.create')

    @include('blocks.footer')

@endsection