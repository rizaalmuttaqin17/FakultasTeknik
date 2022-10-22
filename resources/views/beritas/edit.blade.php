@extends('layouts.app')
@section('title')
Edit Berita
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading m-0">Edit Berita</h3>
        <div class="filter-container section-header-breadcrumb row justify-content-md-end">
            <a href="{{ route('beritas.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
    <div class="content">
        @include('stisla-templates::common.errors')
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">
                            {!! Form::model($berita, ['route' => ['beritas.update', $berita->id], 'method' => 'patch',
                            'files' => 'true']) !!}
                            <div class="row">
                                @include('beritas.fields')
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('beritas.modal.add_tags')

@endsection