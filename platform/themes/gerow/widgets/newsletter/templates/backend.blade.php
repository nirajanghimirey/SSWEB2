<div class="mb-3">
    <label class="form-label" for="newsletter-title">{{ __('Name') }}</label>
    <input type="text" id="newsletter-title" class="form-control" name="name" value="{{ Arr::get($config, 'name') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="newsletter-title">{{ __('Description') }}</label>
    <textarea type="text" id="newsletter-title" class="form-control" name="description">{{ Arr::get($config, 'description') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="newsletter-with-social-links">{{ __('With social links') }}</label>
    <x-core::form.select id="newsletter-with-social-links" name="with_social_links">
        <option value="yes" {{ Arr::get($config, 'with_social_links', 'yes') == 'yes' ? 'selected' : '' }}>{{ __('Yes') }}</option>
        <option value="no" {{ Arr::get($config, 'with_social_links', 'yes') == 'no' ? 'selected' : '' }}>{{ __('No') }}</option>
    </x-core::form.select>

    <x-core::alert type="info" class="small">
        {{ __('Please go to Theme options -> Social links to setup social links.') }}
    </x-core::alert>
</div>
