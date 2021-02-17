@extends('layouts.app')


@section('title', 'Показания')

@section('content')

    @include('blocks.header')

    @include('indication.blocks.list')

    @include('blocks.footer')

@endsection