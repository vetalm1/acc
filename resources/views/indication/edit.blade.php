@extends('layouts.app')


@section('title', 'Редактирование показаний')

@section('content')

    @include('blocks.header')

    @include('indication.blocks.forms.edit')

    @include('blocks.footer')

@endsection