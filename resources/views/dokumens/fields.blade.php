<!-- Judul Field -->
<div class="form-group col-sm-12">
    {!! Form::label('judul', 'Judul') !!}
    {!! Form::text('judul', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'File') !!}
    {!! Form::file('file', ['class' => 'form-control', 'accept' => 'application/pdf', 'files'=>'true', 'required']) !!}
</div>

<!-- Prodi Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('prodi_id', 'Prodi Id:') !!}
    {!! Form::number('prodi_id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('dokumens.index') }}" class="btn btn-light">Batal</a>
</div>
