@extends('layouts.app')
@section('title')
    Dokumen Details 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Dokumen Details</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('dokumens.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('dokumens.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
