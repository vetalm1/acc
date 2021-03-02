@extends('layouts.app')


@section('title', 'Отчет')

@section('content')

    @include('blocks.header')

    @include('reports.main')

    @include('blocks.footer')

@endsection