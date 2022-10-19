<!-- Judul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control','maxlength' => 254,'maxlength' => 254]) !!}
</div>

<!-- Kategori Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kategori_id', 'Kategori') !!}
    {{-- <select id="kategori_id" name="kategori_id" class="kategori form-control" required></select> --}}
    {!! Form::select('kategori_id', $kategori, null, ['class' => 'kategori_id form-control', 'required', 'placeholder'=>'Pilih Kategori']) !!}
</div>

<!-- Tag Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Tags') !!}
    {!! Form::select('tags[]', $tags, null, ['class' => 'tags form-control', 'multiple']) !!}
</div>

<!-- Banner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banner', 'Banner') !!}
    {!! Form::file('banner', ['class' => 'form-control', 'accept' => 'image/*', 'files'=>'true']) !!}
</div>

<!-- Isi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('isi', 'Isi:') !!}
    {!! Form::textarea('isi', null, ['class' => 'form-control', 'id'=>'berita']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('beritas.index') }}" class="btn btn-light">Batal</a>
</div>

@section('page_js')
    <script type="text/javascript">
         // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
            $(".kategori_id").select2({
                placeholder: "Pilih Kategori...",
                tags: true,
            });
            $(".tags").select2({
                placeholder: "Pilih Tags...",
                tags: true,
            });
        });
    </script>
@endsection