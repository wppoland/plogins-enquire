<?php
/**
 * PRO upsell content, generated from the plogins.com registry by
 * scripts/gen-pro-upsell.mjs. The admin upsell renders this; curate the
 * feature list to fit this plugin's settings screen (do not invent features).
 *
 * @package plogins-enquire-pro
 */

defined('ABSPATH') || exit;

return [
    'name'       => 'Enquire Pro',
    'url'        => 'https://plogins.com/plogins-enquire-pro/pricing/',
    'sellable'   => true,
    'price_from' => 29,
    'currency'   => 'EUR',
    'lead'       => [
        'en' => 'Enquiry logging, auto-reply, attachments, routing and HTML templates. Feature-complete PRO.',
        'pl' => 'Dziennik, automatyczna odpowiedź, załączniki, routing i szablony HTML. Kompletna wersja PRO.',
    ],
    'features'   => [
        [
            'en' => ['title' => 'Enquiry log', 'desc' => 'Save every enquiry under WooCommerce → Enquiry Log with product, contact details and message.'],
            'pl' => ['title' => 'Dziennik zapytań', 'desc' => 'Zapis każdego zapytania w WooCommerce → Enquiry Log z produktem, danymi kontaktowymi i treścią.'],
        ],
        [
            'en' => ['title' => 'Automatic reply', 'desc' => 'Email the shopper a confirmation right after they submit, with {product}, {name} and {site} placeholders.'],
            'pl' => ['title' => 'Automatyczna odpowiedź', 'desc' => 'E-mail potwierdzający do klienta zaraz po wysłaniu zapytania, z placeholderami {product}, {name} i {site}.'],
        ],
        [
            'en' => ['title' => 'File attachments', 'desc' => 'Let shoppers attach one optional JPG, PNG, GIF, WebP, PDF, TXT, DOC or DOCX file up to 5 MB.'],
            'pl' => ['title' => 'Załączniki', 'desc' => 'Klient może dołączyć do zapytania jeden opcjonalny plik JPG, PNG, GIF, WebP, PDF, TXT, DOC lub DOCX do 5 MB.'],
        ],
        [
            'en' => ['title' => 'Recipient routing', 'desc' => 'Route enquiries to different inboxes by product ID, category ID or vendor user ID (first match wins).'],
            'pl' => ['title' => 'Routing odbiorców', 'desc' => 'Kieruj zapytania do różnych skrzynek według ID produktu, ID kategorii lub ID użytkownika vendora (pierwsza reguła wygrywa).'],
        ],
        [
            'en' => ['title' => 'HTML templates', 'desc' => 'Branded HTML emails for the store owner and shopper with accent colour and optional logo.'],
            'pl' => ['title' => 'Szablony HTML', 'desc' => 'Brandowane e-maile HTML dla właściciela sklepu i kupującego z kolorem akcentu i opcjonalnym logo.'],
        ],
    ],
];
