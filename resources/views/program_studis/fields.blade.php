<!-- Kode Field -->
<div class="form-group col-sm-4">
    {!! Form::label('kode', 'Kode Program Studi') !!}
    {!! Form::text('kode', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Fakultas Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('fakultas_id', 'Fakultas') !!}
    {!! Form::select('fakultas_id', $fakultas, null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nama', 'Program Studi') !!}
    {!! Form::text('nama', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('programStudis.index') }}" class="btn btn-light">Cancel</a>
</div>
