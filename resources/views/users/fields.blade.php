<!-- Name Field -->
<div class="form-group col-sm-4">
    {!! Form::label('name', 'Nama Lengkap') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-4">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Agama Field -->
<div class="form-group col-sm-4">
    {!! Form::label('agama', 'Agama') !!}
    {!! Form::select('agama', array('Islam' => 'Islam', 'Protestan'=>'Protestan', 'Katholik'=>'Katholik', 'Hindu'=>'Hindu', 'Buddha'=>'Buddha', 'Khonghucu'=>'Khonghucu'), null, ['class' => 'form-control', 'placeholder'=>'Pilih Agama']) !!}
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group col-sm-3">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin') !!}
    {!! Form::select('jenis_kelamin', array('L' => 'Laki-Laki', 'P'=>'Perempuan'), null, ['class' => 'form-control', 'placeholder'=>'Pilih Jenis Kelamin']) !!}
</div>

<!-- Tempat Lahir Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tempat_lahir', 'Tempat Lahir') !!}
    {!! Form::text('tempat_lahir', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Tanggal Lahir Field -->
<div class="form-group col-sm-2">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir') !!}
    {!! Form::date('tanggal_lahir', null, ['class' => 'form-control','id'=>'tanggal_lahir']) !!}
</div>

<!-- Telepon Field -->
<div class="form-group col-sm-3">
    {!! Form::label('telepon', 'Telepon') !!}
    {!! Form::number('telepon', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control','maxlength' => 245,'maxlength' => 245, 'cols'=>'50', 'rows'=>'10']) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Foto') !!}
    {!! Form::file('photo', ['class' => 'form-control','maxlength' => 90,'maxlength' => 90, 'accept' => 'image/*', 'files'=>'true', 'style' => 'height:auto']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password') !!}<span class="text-danger">*</span>
    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" placeholder="Set account password" name="password" tabindex="2" required>
</div>
<div class="form-group col-sm-6">
    {!! Form::label('password_confirmation', 'Konfirmasi Password') !!}<span class="text-danger">*</span>
    <input id="password_confirmation" type="password" placeholder="Confirm account password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid': '' }}" name="password_confirmation" tabindex="2">
</div>

<div class="form-group col-sm-4">
    <div class="row">
        {!! Form::label('s_role_id', 'Role Akses Diberikan',['class' => 'col-sm-4 label-control']) !!}
        <div class=" skin skin-flat">
            @foreach($sRoles as $item)
                <fieldset>
                    {!! Form::checkbox('s_role_id[]', $item->id, in_array($item->id, $roles)?true:false,['id'=>'input-'.$item->id]) !!}
                    <label for="input-{{$item->id}}" class="ml-1">{!! $item->name !!}</label>
                </fieldset>
            @endforeach
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-light">Batal</a>
</div>
