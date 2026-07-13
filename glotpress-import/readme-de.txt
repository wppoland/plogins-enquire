=== Plogins Enquire - Product Enquiry for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, product enquiry, ask a question, contact form, product question
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Requires Plugins: woocommerce
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Füge den Produkten ein Frageformular hinzu, das dem Ladenbesitzer eine E-Mail sendet.

== Description ==

Enquire fügt deinen WooCommerce-Einzelproduktseiten die Schaltfläche „Frage stellen“ hinzu. Wenn ein Käufer darauf klickt, öffnet sich ein Dialog mit einem kurzen Formular (Name, E-Mail, Nachricht). Beim Absenden wird dir die Frage zusammen mit dem Produktnamen und einem Link dazu per E-Mail zugesandt, sodass du noch vor dem Verkauf antworten kannst.

In deiner Datenbank wird nichts gespeichert. Jede Anfrage wird per E-Mail gesendet und die Adresse des Käufers wird als Reply-To-Header verwendet, sodass du direkt aus deinem Posteingang antworten kannst.

Der Code befindet sich auf GitHub unter https://github.com/wppoland/plogins-enquire, falls du ihn lesen, einen Fehler melden oder einen Patch einsenden möchtest.

= Documentation and links =

* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-enquire/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-enquire/
* <strong>Quellcode</strong> – https://github.com/wppoland/plogins-enquire
* <strong>Fehlerberichte und Funktionsanfragen</strong> – https://github.com/wppoland/plogins-enquire/issues


= Features =

* Schaltfläche „Frage stellen“ auf einzelnen Produktseiten, mit einer Beschriftung, die du ändern kannst, platziert nach der Schaltfläche „In den Warenkorb“.
* Das Formular wird in einem nativen `<dialog>`-Element geöffnet: Es hält den Fokus fest, solange es geöffnet ist, beschriftet sich selbst für Screenreader und überspringt seine Animation, wenn der Besucher reduzierte Bewegung bevorzugt.
* Anfragen gehen über `wp_mail()` an die von dir festgelegte Adresse (oder an die Admin-E-Mail-Adresse deiner Website, wenn du sie leer lässt), mit dem Produktnamen und seinem Permalink im Text.
* Erfolgs- und Fehlermeldungen werden inline angezeigt, sodass kein Neuladen der Seite erforderlich ist.
* Spam-Behandlung: Nonce-Prüfung, ein Honeypot-Feld und ein 30-Sekunden-Rate-Limit pro Besucher.
* Wähle aus, welche der Felder Name, E-Mail-Adresse und Nachricht erforderlich sind, und bearbeite die Schaltfläche, die Feldbeschriftungen, den Erfolgs-/Fehlertext und den E-Mail-Betreff.
* Die Einstellungen findest du unter WooCommerce → Enquire.
* Das kleine CSS und JS werden nur auf Produktseiten geladen. Das Plugin erklärt Kompatibilität mit WooCommerce HPOS sowie den Warenkorb- und Checkout-Blöcken.

== Installation ==

1. Lade das Plugin nach `/wp-content/plugins/enquire` hoch oder installiere es über Plugins → Neu hinzufügen.
2. Aktiviere es. WooCommerce muss aktiv sein.
3. Gehe zu WooCommerce → Enquire, um die E-Mail-Adresse des Empfängers, die Schaltflächenbeschriftung und die Formularoptionen festzulegen.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Ja. Enquire fügt seine Schaltfläche zu einzelnen Produktseiten von WooCommerce hinzu und verwendet WooCommerce-Produktdaten.

= Where are enquiries stored? =

Gar nicht. Jede Anfrage wird per E-Mail verschickt und nichts wird in deine Datenbank geschrieben.

= Where do enquiries get sent? =

An die Empfängeradresse, die du auf der Einstellungsseite festgelegt hast. Wenn du das Feld leer lässt, wird die Administrator-E-Mail-Adresse deiner Website verwendet.

= How is spam handled? =

Jede Übermittlung wird anhand eines Nonce- und eines versteckten Honeypot-Felds überprüft, und ein Besucher kann höchstens alle 30 Sekunden eine Anfrage senden.

= Can I customise the button label? =

Ja. Lege den Schaltflächentext und die Formularüberschrift unter <strong>WooCommerce → Enquire</strong> fest.


= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es im Netzwerk oder auf einzelnen Websites. Jede Site behält ihre eigenen Einstellungen und Daten.

== Screenshots ==

1. Das Formular „Frage stellen“ auf einer einzelnen Produktseite.
2. Die Einstellungsseite WooCommerce → Enquire.

== External Services ==

Enquire stellt keine Verbindung zu einem externen Dienst her. Formulareinsendungen werden über `admin-ajax.php` an deine eigene Website gesendet und verlassen niemals deinen Server. Jede Anfrage wird mit der eigenen `wp_mail()` (WordPress-Kernmail) deiner Website zugestellt, wobei der Mailer verwendet wird, über den deine Website bereits verfügt. Das Plugin speichert nur seine eigenen Einstellungen (die Option `enquire_settings`) und einen Schemamarker (`enquire_db_version`) sowie einen kurzlebigen Transient, der für die Ratenbegrenzung pro Besucher verwendet wird; der Anfrageinhalt selbst wird nicht in die Datenbank geschrieben.

== Translations ==

Plogins Enquire umfasst polnische, deutsche und spanische Übersetzungen für die Plugin-Schnittstelle. Die Textdomain ist `plogins-enquire`, sodass WordPress.org-Sprachpakete diese gebündelten Übersetzungen auch überschreiben oder erweitern können.

== Changelog ==

= 1.0.2 =
* Gebündelte polnische, deutsche und spanische Übersetzungen für die Plugin-Schnittstelle hinzugefügt.

= 1.0.1 =
* Erste stabile Version.

= 0.1.2 =
* Umbenannt in Plogins Enquire for WooCommerce für einen unverwechselbareren Plugin-Namen.

= 0.1.1 =
* Fügt Erweiterungs-Hooks für Formularfelder, Validierung, Anfrage-Nutzdaten und Argumente für ausgehende E-Mails hinzu.
* Fügt Unterstützung für mehrteilige Formulare hinzu, sodass Premium-Add-ons Dateien an Anfrage-E-Mails anhängen können.

= 0.1.0 =
* Erstveröffentlichung.
