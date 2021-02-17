@extends('layouts.app')


@section('title', 'Добавление прибора')

@section('content')

    @include('blocks.header')

    @include('device.blocks.forms.create')

    @include('blocks.footer')

@endsection