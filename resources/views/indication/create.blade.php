@extends('layouts.app')


@section('title', 'Добавить показание')

@section('content')

    @include('blocks.header')

    @include('indication.blocks.forms.create')

    @include('blocks.footer')

@endsection