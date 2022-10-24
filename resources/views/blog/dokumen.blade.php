@extends('blog.app')
@section('title')
Dokumen Fakultas Teknik
@endsection
@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Dokumen</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Dokumen</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Cart Area -->
<section class="cart-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <form>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Dokumen</th>
                                    <th scope="col">Catatan</th>
                                    {{-- <th scope="col">Thumbnail</th> --}}
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokumen as $item)
                                <tr>
                                    <td class="product-thumbnail">{{ $loop->iteration }}</td>
                                    <td class="product-name">{{ $item['judul'] }}</td>
                                    <td class="product-price">{{ $item['keterangan'] }}</td>
                                    {{-- <td class="product-subtotal"><a href="{{ url($item['file']) }}">Download File</a></td> --}}
                                    <td>
                                        <a href="{{ url($item['file']) }}" class="download">
                                            Download
                                            <i class="fas fa-save"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Cart Area -->
@endsection