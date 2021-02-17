@extends('layouts.app')


@section('title', 'Объект')

@section('content')

    @include('blocks.header')

    @include('facility.blocks.list')

    @include('blocks.footer')

@endsection