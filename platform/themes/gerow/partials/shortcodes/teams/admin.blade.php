<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect(
            'style',
            [
                'style-1' => __('Style :number', ['number' => 1]),
                'style-2' => __('Style :number', ['number' => 2]),
                'style-3' => __('Style :number', ['number' => 3]),
                'style-4' => __('Style :number', ['number' => 4]),
                'style-5' => __('Style :number', ['number' => 5]),
                'style-6' => __('Style :number', ['number' => 6]),
            ],
            Arr::get($attributes, 'style'),
        ) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Title') }}</label>
        <input
            class="form-control"
            name="title"
            value="{{ Arr::get($attributes, 'title') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Subtitle') }}</label>
        <input
            class="form-control"
            name="subtitle"
            value="{{ Arr::get($attributes, 'subtitle') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Description') }}</label>
        <textarea
            class="form-control"
            name="description"
        >{{ Arr::get($attributes, 'description') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background image') }}</label>
        {!! Form::mediaImage('background_image', Arr::get($attributes, 'background_image')) !!}
    </div>

    <div class="mb-3">
        {!! Shortcode::fields()->tabs(
            [
                'team_id' => [
                    'type' => 'select',
                    'title' => __('Team'),
                    'options' => $teams,
                    'required' => true,
                ],
                'image' => [
                    'type' => 'image',
                    'title' => __('Image'),
                    'required' => true,
                ],
            ],
            $attributes,
        ) !!}
    </div>
</section>
