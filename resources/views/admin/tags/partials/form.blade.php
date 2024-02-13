<div class="card-body">
    {!! Form::open(['route' => 'admin.tags.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the tag name']) !!}
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        {!! Form::label('slug', 'Name') !!}
        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug name', 'readonly']) !!}
        @error('slug')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('color', 'Color') !!}
        {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
        @error('color')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>