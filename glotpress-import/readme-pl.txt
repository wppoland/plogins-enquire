=== Plogins Enquire - Product Enquiry for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, product enquiry, ask a question, contact form, product question
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Wymaga wtyczek: woocommerce
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Dodaj formularz Zadaj pytanie do produktów, który wysyła e-mail do właściciela sklepu.

== Description ==

Inquire dodaje przycisk „Zadaj pytanie” do stron pojedynczych produktów WooCommerce. Po kliknięciu przez kupującego otwiera się okno dialogowe z krótkim formularzem (imię i nazwisko, adres e-mail, wiadomość). Po przesłaniu pytanie zostanie wysłane do Ciebie e-mailem wraz z nazwą produktu i linkiem do niego, abyś mógł odpowiedzieć przed sprzedażą.

Nic nie jest przechowywane w Twojej bazie danych. Każde zapytanie jest wysyłane e-mailem, a adres kupującego jest używany jako nagłówek Reply-To, dzięki czemu możesz odpowiadać bezpośrednio ze swojej skrzynki odbiorczej.

Kod znajduje się na GitHubie pod adresem https://github.com/wppoland/plogins-enquire, jeśli chcesz go przeczytać, zgłosić błąd lub wysłać łatkę.

= Documentation and links =

* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-enquire/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-enquire/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-enquire
* <strong>Raporty o błędach i prośby o nowe funkcje</strong> - https://github.com/wppoland/plogins-enquire/issues


= Features =

* Przycisk „Zadaj pytanie” na stronach poszczególnych produktów, z etykietą z możliwością zmiany, umieszczony po przycisku „Dodaj do koszyka”.
* Formularz otwiera się w natywnym `<dialogu>`: zatrzymuje skupienie, gdy jest otwarty, przypisuje sobie etykietę dla czytników ekranu i pomija animację, gdy odwiedzający woli ograniczony ruch.
* Zapytania wysyłane są za pośrednictwem `wp_mail()` na dowolny ustawiony adres (lub adres e-mail administratora witryny, jeśli pozostawisz to pole puste), z nazwą produktu i jego łączem bezpośrednim w treści.
* Komunikaty o powodzeniu i błędach pojawiają się w tekście, więc nie ma potrzeby ponownego ładowania strony.
* Obsługa spamu: kontrola jednorazowa, pole typu Honeypot i 30-sekundowy limit szybkości na odwiedzającego.
* Wybierz wymagane imię i nazwisko, adres e-mail i wiadomość, a następnie edytuj przycisk, etykiety pól, tekst powodzenia/błędu i temat wiadomości e-mail.
* Ustawienia są dostępne w WooCommerce → Zapytaj.
* Małe CSS i JS ładują się tylko na stronach produktów. Wtyczka deklaruje WooCommerce HPOS i koszyk &amp; Kompatybilność z blokami kasowymi.

== Installation ==

1. Prześlij wtyczkę do `/wp-content/plugins/enquire` lub zainstaluj poprzez Wtyczki → Dodaj nową.
2. Aktywuj. WooCommerce musi być aktywny.
3. Przejdź do WooCommerce → Zapytaj, aby ustawić adres e-mail odbiorcy, etykietę przycisku i opcje formularza.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Tak. Inquire dodaje swój przycisk do stron pojedynczych produktów WooCommerce i wykorzystuje dane produktów WooCommerce.

= Where are enquiries stored? =

Nie są. Każde zapytanie jest wysyłane e-mailem i nic nie jest zapisywane w Twojej bazie danych.

= Where do enquiries get sent? =

Na adres odbiorcy ustawiony na stronie ustawień. Jeśli pozostawisz to pole puste, używany będzie adres e-mail administratora Twojej witryny.

= How is spam handled? =

Każde zgłoszenie jest sprawdzane pod kątem wartości jednorazowej i ukrytego pola typu Honeypot, a odwiedzający może wysłać maksymalnie jedno zapytanie co 30 sekund.

= Can I customise the button label? =

Tak. Ustaw tekst przycisku i nagłówek formularza w sekcji <strong>WooCommerce → Zapytaj</strong>.


= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest kompatybilna z WordPress Multisite. Aktywuj go w sieci lub aktywuj na poszczególnych stronach; każda witryna przechowuje własne ustawienia i dane.

== Screenshots ==

1. Formularz „Zadaj pytanie” na stronie pojedynczego produktu.
2. Strona ustawień WooCommerce → Zapytaj.

== External Services ==

Inquire nie łączy się z żadną usługą zewnętrzną. Przesłane formularze są wysyłane do Twojej witryny poprzez `admin-ajax.php` i nigdy nie opuszczają Twojego serwera. Każde zapytanie jest dostarczane z własnym programem `wp_mail()` (podstawowa poczta WordPress) Twojej witryny, przy użyciu dowolnego programu pocztowego, który już posiada Twoja witryna. Wtyczka przechowuje tylko własne ustawienia (opcja `enquire_settings`) i znacznik schematu (`enquire_db_version`) oraz krótkotrwały stan przejściowy używany do limitu szybkości na odwiedzającego; Sama treść zapytania nie jest zapisywana w bazie danych.

== Changelog ==

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.2 =
* Zmieniono nazwę na Plogins. Zapytaj o WooCommerce, aby uzyskać bardziej charakterystyczną nazwę wtyczki.

= 0.1.1 =
* Dodaje haki rozszerzeń dla pól formularzy, sprawdzania poprawności, danych ładunku zapytań i argumentów wychodzących wiadomości e-mail.
* Dodaje obsługę formularzy wieloczęściowych, dzięki czemu dodatki premium mogą dołączać pliki do wiadomości e-mail z zapytaniami.

= 0.1.0 =
* Pierwsze wydanie.
