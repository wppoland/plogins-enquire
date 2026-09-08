<?php

declare(strict_types=1);

namespace Enquire\Service;

defined('ABSPATH') || exit;

/**
 * The customer-facing strings a merchant may override, in the language of the
 * site.
 *
 * They used to be English sentences in config/defaults.php. A string in a
 * config array is never wrapped in a gettext call, so it never reaches the
 * .pot and no translator can touch it, and the defaults+stored merge handed
 * that English straight to the storefront. The template carried `__()`
 * fallbacks next to those keys, which looked like the problem was handled;
 * they could never fire, because the key was always present and non-empty.
 * Saving the settings screen once made it permanent, the packaged English was
 * written into the option and from then on not even a complete language pack
 * could reach it.
 *
 * The packaged default is now empty, meaning "use the string below". A merchant
 * who types their own still wins, and what they typed is stored as typed.
 */
final class Texts
{
    /**
     * Setting key => the translated default.
     *
     * @return array<string, string>
     */
    public static function defaults(): array
    {
        return [
            'button_text'     => __('Ask a question', 'plogins-enquire'),
            'form_title'      => __('Ask a question about this product', 'plogins-enquire'),
            'name_label'      => __('Your name', 'plogins-enquire'),
            'email_label'     => __('Your email', 'plogins-enquire'),
            'message_label'   => __('Your question', 'plogins-enquire'),
            'submit_text'     => __('Send enquiry', 'plogins-enquire'),
            'success_message' => __('Thanks! Your question has been sent. We will get back to you shortly.', 'plogins-enquire'),
            'error_message'   => __('Sorry, something went wrong. Please try again.', 'plogins-enquire'),
            /* translators: {product} is a placeholder replaced with the product name, keep it as is. */
            'email_subject'   => __('Product enquiry: {product}', 'plogins-enquire'),
        ];
    }

    /**
     * Fill every empty text key with its translated default.
     *
     * Applied on the way OUT, where the string is about to be shown, and never
     * on the way in: writing the resolved text back to the option would freeze
     * one language into the database, which is the bug this class exists to fix.
     *
     * @param array<string, mixed> $settings
     * @return array<string, mixed>
     */
    public static function apply(array $settings): array
    {
        foreach (self::defaults() as $key => $text) {
            if (trim((string) ($settings[$key] ?? '')) === '') {
                $settings[$key] = $text;
            }
        }

        return $settings;
    }
}
