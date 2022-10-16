<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Penulis') !!}
    <select name="users_id" class="penulis form-control" required></select>
    {{-- {!! Form::select('users_id', null, null, ['class' => 'users_id form-control']) !!} --}}
</div>

<!-- Kategori Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kategori_id', 'Kategori') !!}
    <select name="kategori_id" class="kategori form-control" required></select>
</div>

<!-- Program Studi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('program_studi_id', 'Program Studi') !!}
    {!! Form::select('program_studi_id', $prodi, null, ['class' => 'form-control']) !!}
</div>

<!-- Banner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banner', 'Banner:') !!}
    {!! Form::file('banner', ['class' => 'form-control', 'accept' => 'image/*', 'files'=>'true']) !!}
</div>

<!-- Judul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control','maxlength' => 254,'maxlength' => 254]) !!}
</div>

<!-- Isi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('isi', 'Isi:') !!}
    {!! Form::textarea('isi', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('beritas.index') }}" class="btn btn-light">Cancel</a>
</div>

@section('page_js')
    <script type="text/javascript">
         // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
            $( ".penulis" ).select2({
                placeholder: "Pilih Penulis...",
                ajax: { 
                    url: "{{route('beritas.penulis')}}",
                    type: "post",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            _token: CSRF_TOKEN,
                            search: params.term // search term
                        };
                    },
                    processResults: function (response) {
                        return { results: response };
                    },
                    cache: true
                }
            });
            $( ".kategori" ).select2({
                placeholder: "Pilih Kategori...",
                ajax: { 
                    url: "{{route('beritas.kategori')}}",
                    type: "post",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            _token: CSRF_TOKEN,
                            search: params.term // search term
                        };
                    },
                    processResults: function (response) {
                        return { results: response };
                    },
                    cache: true
                },
                tags: true,
            });
        });
    </script>
@endsection