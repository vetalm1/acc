@extends('layouts.app')


@section('title', 'Приборы')

@section('content')

    @include('blocks.header')

    @include('device.blocks.list')

    @include('blocks.footer')

@endsection