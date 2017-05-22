@extends('_layouts.master')

@section('body')
    @foreach($people as $person)
        {{ $person->name }}
        {{ $person->position }}
    @endforeach
@endsection
