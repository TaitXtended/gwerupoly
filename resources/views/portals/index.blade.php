@extends('layouts.admin')

@section('content')
<H1>Hie {{Auth()->user()->name}}</H1>
@endsection
