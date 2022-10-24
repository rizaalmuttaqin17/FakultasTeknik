@extends('layouts.app')
@section('title')
    Dokumens 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dokumens</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('dokumens.create')}}" class="btn btn-primary form-btn">Dokumen <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('dokumens.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

