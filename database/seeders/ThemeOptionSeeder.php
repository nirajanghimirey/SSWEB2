<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Page\Database\Traits\HasPageSeeder;
use Botble\Page\Models\Page;
use Botble\Theme\Database\Traits\HasThemeOptionSeeder;

class ThemeOptionSeeder extends BaseSeeder
{
    use HasPageSeeder;
    use HasThemeOptionSeeder;

    public function run(): void
    {
        $this->createThemeOptions([
            'site_title' => 'Gerow - Business Consulting',
            'seo_description' => 'With experience, we make sure to get every project done very fast and in time with high quality using our Botble CMS https://1.envato.market/LWRBY',
            'favicon' => $this->filePath('general/favicon.png'),
            'website' => 'https://botble.com',
            'contact_email' => 'support@botble.com',
            'site_description' => 'At Gerow, we specialize in comprehensive business solutions designed to enhance your operational efficiency and supply chain excellence. Whether you’re a seasoned entrepreneur looking to fine-tune your strategies, a startup seeking guidance, or a business professional looking for insights and solutions, our platform is your one-stop destination. Our team of experts and a wealth of resources are here to empower your journey towards business excellence. Explore our offerings and discover how we can be your partner in success.',
            'phone' => '+01-246-357',
            'address' => '4517 Washington Ave. Manchester, Kentucky 39495',
            'cookie_consent_message' => 'Your experience on this site will be improved by allowing cookies ',
            'cookie_consent_learn_more_url' => '/cookie-policy',
            'cookie_consent_learn_more_text' => 'Cookie Policy',
            'homepage_id' => Page::query()->value('id'),
            'logo' => $this->filePath('general/logo.png'),
            'primary_color' => '#0055FF',
            'primary_hover_color' => '#0049DC',
            'secondary_color' => '#00194C',
            'heading_color' => '#00194C',
            'text_color' => '#334770',
            'heading_font' => 'Urbanist',
            'primary_font' => 'Plus Jakarta Sans',
            'blog_page_id' => $this->getPageId('Blog'),
            'breadcrumb_background' => $this->filePath('general/breadcrumb-bg.png'),
            'breadcrumb_first_shape_image' => $this->filePath('backgrounds/breadcrumb-shape01.png'),
            'breadcrumb_second_shape_image' => $this->filePath('backgrounds/breadcrumb-shape02.png'),
            'footer_background_image' => $this->filePath('backgrounds/bg-footer.png'),
            'footer_background_color' => '#fff',
            'footer_text_color' => '#00194C',
            'footer_text_muted_color' => '#334770',
            'footer_border_color' => '#0055FF',
            'footer_bottom_background_color' => '#fff',
            'social_links' => [
                [
                    [
                        'key' => 'social-name',
                        'value' => 'Facebook',
                    ],
                    [
                        'key' => 'social-icon',
                        'value' => 'fab fa-facebook-f',
                    ],
                    [
                        'key' => 'social-url',
                        'value' => 'https://www.facebook.com/',
                    ],
                ],
                [
                    [
                        'key' => 'social-name',
                        'value' => 'Instagram',
                    ],
                    [
                        'key' => 'social-icon',
                        'value' => 'fab fa-instagram',
                    ],
                    [
                        'key' => 'social-url',
                        'value' => 'https://www.instagram.com/',
                    ],
                ],
                [
                    [
                        'key' => 'social-name',
                        'value' => 'Twitter',
                    ],
                    [
                        'key' => 'social-icon',
                        'value' => 'fab fa-twitter',
                    ],
                    [
                        'key' => 'social-url',
                        'value' => 'https://www.twitter.com/',
                    ],
                ],
                [
                    [
                        'key' => 'social-name',
                        'value' => 'YouTube',
                    ],
                    [
                        'key' => 'social-icon',
                        'value' => 'fab fa-youtube',
                    ],
                    [
                        'key' => 'social-url',
                        'value' => 'https://www.youtube.com/',
                    ],
                ],
                [
                    [
                        'key' => 'social-name',
                        'value' => 'Pinterest',
                    ],
                    [
                        'key' => 'social-icon',
                        'value' => 'fab fa-pinterest-p',
                    ],
                    [
                        'key' => 'social-url',
                        'value' => 'https://www.pinterest.com/',
                    ],
                ],
            ],
        ]);
    }
}
