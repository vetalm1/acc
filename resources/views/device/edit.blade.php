@extends('layouts.app')


@section('title', 'Редактирование прибора')

@section('content')

    @include('blocks.header')

    @include('device.blocks.forms.edit')

    @include('blocks.footer')

@endsection