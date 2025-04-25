<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Address') }}</label>
        <input
            class="form-control"
            name="address"
            value="{{ Arr::get($attributes, 'address') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Map style') }}</label>
        <select
            class="form-select"
            name="map_style"
        >
            <option
                value="back_and_white"
                @if (Arr::get($attributes, 'map_style', 'back_and_white') == 'back_and_white') selected @endif
            >{{ __('Black and white') }}</option>
            <option
                value="colorful"
                @if (Arr::get($attributes, 'map_style', 'back_and_white') == 'colorful') selected @endif
            >{{ __('Colorful') }}</option>
        </select>
    </div>
</section>
