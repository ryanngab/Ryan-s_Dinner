@extends('dashboard.layouts.sidebar')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="text-center">Admin</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            </div>
        </div>
            @foreach ($orderan as $Book)
                <tr class="text-center">
                    <td class="text-white">{{ $loop->iteration }}</td>
                    <td class="text-white">{{ $Book->id }}</td>
                    <td class="text-white">{{ $Book->name }}</td>
            @endforeach
    </section>
@endsection
