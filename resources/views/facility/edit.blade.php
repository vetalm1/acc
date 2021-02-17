@extends('layouts.app')


@section('title', 'Объект')

@section('content')

    @include('blocks.header')

    @include('facility.blocks.forms.edit')

    @include('blocks.footer')

@endsection