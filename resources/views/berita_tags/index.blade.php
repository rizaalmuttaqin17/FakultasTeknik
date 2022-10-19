@extends('layouts.app')
@section('title')
    Berita Tags 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Berita Tags</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('beritaTags.create')}}" class="btn btn-primary form-btn">Berita Tags <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('berita_tags.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

