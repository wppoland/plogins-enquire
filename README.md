# Enquire - Product Enquiry Form for WooCommerce

Enquire adds an accessible "Ask a question" button to your WooCommerce single product pages.
Clicking it opens a simple dialog form (name, email, message); on submit, the enquiry is emailed
to you with the product name and link, so you can answer pre-sale questions and close more sales.
No enquiry data is stored — submissions are emailed only.

## Features

- "Ask a question" button on single product pages, with a configurable label.
- Accessible dialog form built on the native `<dialog>` element: keyboard friendly, focus-managed,
  screen-reader labelled, and motion-reduced aware.
- Sends enquiries via `wp_mail()` to a configurable recipient (falls back to the site admin email),
  with the customer's address set as Reply-To.
- Inline success and error states, no page reload.
- Spam protection: nonce verification, a honeypot field and a per-visitor rate limit.
- Settings page under WooCommerce → Enquire to customise labels, required fields and messaging.

## Installation

1. Upload the plugin to `/wp-content/plugins/enquire`, or install it via Plugins → Add New.
2. Activate it. WooCommerce must be active.
3. Go to WooCommerce → Enquire to set the recipient email, button label and form options.

## Frequently Asked Questions

**Does it require WooCommerce?**
Yes. Enquire adds its button to WooCommerce single product pages and uses WooCommerce product data.

**Where are enquiries stored?**
Nowhere. Enquiries are emailed only — nothing is written to your database.

Built by WPPoland — https://plogins.com

License: GPL-2.0-or-later
