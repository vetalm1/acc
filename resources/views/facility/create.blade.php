@extends('layouts.app')


@section('title', 'Добавление объекта')

@section('content')

    @include('blocks.header')

    @include('facility.blocks.forms.create')

    @include('blocks.footer')

@endsection