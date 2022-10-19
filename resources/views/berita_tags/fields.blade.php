<!-- Berita Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('berita_id', 'Berita Id:') !!}
    {!! Form::number('berita_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tags Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags_id', 'Tags Id:') !!}
    {!! Form::number('tags_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('beritaTags.index') }}" class="btn btn-light">Cancel</a>
</div>
