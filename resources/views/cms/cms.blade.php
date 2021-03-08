@extends('layouts.app')


@section('title', 'Панель менеджера')

@section('content')

    @include('blocks.header')

    @include('cms.blocks.main')

    @include('blocks.footer')

@endsection