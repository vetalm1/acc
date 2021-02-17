@extends('layouts.app')


@section('title', 'Показания')

@section('content')

    @include('blocks.header')

    @include('indication.blocks.item')

    @include('blocks.footer')

@endsection