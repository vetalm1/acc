@extends('layouts.app')


@section('title', 'Прибор')

@section('content')

    @include('blocks.header')

    {{ Breadcrumbs::render('device', $device) }}

    @include('device.blocks.item')

    @include('blocks.footer')

@endsection