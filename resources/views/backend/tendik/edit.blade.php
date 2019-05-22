@extends('backend.layouts.app')

@section('breadcrumb')
    {!! cui_breadcrumb([
        'Home' => route('admin.home'),
        'tendik' => route('admin.tendik.index'),
        'Edit' => '#'
    ]) !!}
@endsection

@section('toolbar')

    {!! cui_toolbar_btn(route('admin.tendik.create'), 'icon-plus', 'Tambah Tendik') !!}
    {!! cui_toolbar_btn(route('admin.tendik.index'), 'icon-list', 'List Tendik') !!}

@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                {{ Form::model($tendik, ['route' => ['admin.tendik.update', $tendik->id], 'method' => 'patch']) }}

                {{--CARD HEADER --}}
                <div class="card-header">
                    Edit Tendik
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">
                    @include('backend.tendik._form')
                </div>

                {{-- CARD FOOTER--}}
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Simpan"/>
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
