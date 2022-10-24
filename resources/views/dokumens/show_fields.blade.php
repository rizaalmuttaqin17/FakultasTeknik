<!-- Judul Field -->
<div class="form-group">
    {!! Form::label('judul', 'Judul:') !!}
    <p>{{ $dokumen->judul }}</p>
</div>

<!-- File Field -->
<div class="form-group">
    {!! Form::label('file', 'File:') !!}
    <p>{{ $dokumen->file }}</p>
</div>

<!-- Keterangan Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{{ $dokumen->keterangan }}</p>
</div>

<!-- Prodi Id Field -->
<div class="form-group">
    {!! Form::label('prodi_id', 'Prodi Id:') !!}
    <p>{{ $dokumen->prodi_id }}</p>
</div>

