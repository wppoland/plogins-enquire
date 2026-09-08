<?php
/**
 * Default settings, merged under the option key `enquire_settings`.
 *
 * The feature ships enabled. The merchant configures the recipient address, the
 * trigger button label/placement, which fields are required, and the success
 * message from the Enquire admin screen. No enquiry data is stored, submissions
 * are emailed only.
 *
 * @package Enquire
 *
 * @return array<string, mixed>
 */

declare(strict_types=1);

defined('ABSPATH') || exit;

return [
    'enabled' => true,

    // Where enquiries are sent. Empty falls back to the WordPress admin email.
    'recipient' => '',

    // Every customer-facing string below is empty on purpose. A value here can
    // never be translated, because a config array is not a gettext call, so the
    // packaged English used to reach the storefront even under a complete
    // language pack, and one save on the settings screen froze it into the
    // option for good. Empty means "use Enquire\Service\Texts", which is
    // translated; anything a merchant types still wins.
    //
    // Trigger button.
    'button_text' => '',

    // Form chrome.
    'form_title'    => '',
    'name_label'    => '',
    'email_label'   => '',
    'message_label' => '',
    'submit_text'   => '',

    // Required fields. Each can be toggled independently.
    'require_name'    => true,
    'require_email'   => true,
    'require_message' => true,

    // Messaging.
    'success_message' => '',
    'error_message'   => '',

    // Email subject line. {product} is replaced with the product name.
    'email_subject' => '',
];
