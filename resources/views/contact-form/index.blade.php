@extends('ui::layouts.centered')
@section('content')

{{--    {!! $table !!}--}}

    {!! Suitable::source($data)
    ->columns([
        'id',
        ['header' => 'Nama', 'field' => 'name', 'searchable' => true],
        ['header' => 'Surel', 'field' => 'email', 'searchable' => 'email_adddress'],
    ])
    ->render() !!}

@stop
