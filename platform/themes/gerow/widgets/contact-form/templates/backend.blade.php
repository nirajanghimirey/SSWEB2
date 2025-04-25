<div class="mb-3">
    <label class="form-label" for="contact-form-widget-name">{{ __('Name') }}</label>
    <input type="text" id="contact-form-widget-name" class="form-control" name="name" value="{{ Arr::get($config, 'name') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="contact-form-widget-description">{{ __('Description') }}</label>
    <textarea id="contact-form-widget-description" class="form-control" name="description">{{ Arr::get($config, 'description') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Background image :number', ['number' => 1]) }}</label>
    {!! Form::mediaImage('background_image_1', Arr::get($config, 'background_image_1')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Background image :number', ['number' => 2]) }}</label>
    {!! Form::mediaImage('background_image_2', Arr::get($config, 'background_image_2')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Background color') }}</label>
    {!! Form::customColor('background_color', Arr::get($config, 'background_color', '#00194c'), ['class' => 'form-control']) !!}
</div>
