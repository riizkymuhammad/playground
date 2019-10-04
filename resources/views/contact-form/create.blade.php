@extends('ui::layouts.centered')
@section('content')
    <h1 class="ui header dividing m-b-2">Apa yang bisa kami bantu?</h1>
    {!! form()->post(route('contact-form.create')) !!}
    {!! form()->text('name')->label('Nama Lengkap')->required() !!}
    {!! form()->email('email')->label('Alamat Email')->required() !!}
    {!! form()->select('kategori', [0 =>'Kerusakan Fasilitas Umum', 1 => 'Pungutan Liar' , 2 =>'Pelayanan Publik'])->label('Kategori')->required() !!}
    {!! form()->textarea('message')->label('Pesan')->required() !!}
    {!! form()->submit('Kirim') !!}
    {!! form()->close() !!}
@stop
