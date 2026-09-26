<?php

declare(strict_types=1);

namespace Enquire;

defined('ABSPATH') || exit;

/**
 * Idempotent schema/version migrations, run on every boot. Compares a stored
 * option against VERSION and applies forward steps as needed.
 */
final class Migrator
{
    private const OPTION          = 'enquire_db_version';
    private const SETTINGS_OPTION = 'enquire_settings';

    /**
     * The exact English wording that used to sit in config/defaults.php and got
     * written into `enquire_settings` the first time the settings screen was
     * saved. A stored value identical to one of these is packaged English that
     * no translation can reach, so it is cleared and resolved through
     * Enquire\Service\Texts instead.
     *
     * @var array<string, string>
     */
    private const LEGACY_TEXTS = [
        'button_text'     => 'Ask a question',
        'form_title'      => 'Ask a question about this product',
        'name_label'      => 'Your name',
        'email_label'     => 'Your email',
        'message_label'   => 'Your question',
        'submit_text'     => 'Send enquiry',
        'success_message' => 'Thanks! Your question has been sent. We will get back to you shortly.',
        'error_message'   => 'Sorry, something went wrong. Please try again.',
        'email_subject'   => 'Product enquiry: {product}',
    ];

    public function maybeMigrate(): void
    {
        $current = (string) get_option(self::OPTION, '0');

        if (version_compare($current, VERSION, '>=')) {
            return;
        }

        $this->clearUntranslatableTexts();

        update_option(self::OPTION, VERSION, false);
    }

    /**
     * Drop stored copies of the old packaged English strings.
     *
     * The match is byte for byte on purpose. A merchant's own wording, in any
     * language, including a hand translation of the same sentence, differs from
     * these and is left exactly as it was typed.
     */
    private function clearUntranslatableTexts(): void
    {
        $stored = get_option(self::SETTINGS_OPTION, []);

        if (! is_array($stored)) {
            return;
        }

        $changed = false;

        foreach (self::LEGACY_TEXTS as $key => $legacy) {
            if (array_key_exists($key, $stored) && is_string($stored[$key]) && $stored[$key] === $legacy) {
                $stored[$key] = '';
                $changed      = true;
            }
        }

        if ($changed) {
            update_option(self::SETTINGS_OPTION, $stored);
        }
    }
}
