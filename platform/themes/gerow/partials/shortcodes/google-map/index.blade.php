<div class="contact-map">
    <iframe src="https://www.google.com/maps?q=[{{ $shortcode->address }}]&output=embed" style="mix-blend-mode: {{ (($shortcode->map_style ?: 'black_and_white') == 'colorful' ? 'unset' : 'luminosity') }}"></iframe>
</div>
