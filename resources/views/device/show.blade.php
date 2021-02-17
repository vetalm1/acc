@extends('layouts.app')


@section('title', 'Прибор')

@section('content')

    @include('blocks.header')

    @include('device.blocks.item')

    @include('blocks.footer')

@endsection