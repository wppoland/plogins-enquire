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

Añade un formulario «Hacer una pregunta» a los productos que envía un correo electrónico al propietario de la tienda.

== Description ==

Enquire añade un botón «Hacer una pregunta» a las páginas de un solo producto de WooCommerce. Cuando un comprador hace clic en él, se abre un cuadro de diálogo con un formulario breve (nombre, correo electrónico, mensaje). Al enviarla, la pregunta se te envía por correo electrónico junto con el nombre del producto y un enlace, para que puedas responder antes de la venta.

No se almacena nada en tu base de datos. Cada consulta se envía por correo electrónico y la dirección del comprador se utiliza como cabecera Reply-To para que puedas responder directamente desde tu bandeja de entrada.

El código está en GitHub en https://github.com/wppoland/plogins-enquire si quieres leerlo, informar de un error o enviar un parche.

= Documentation and links =

* <strong>Documentación</strong> - https://plogins.com/es/plogins-enquire/docs/
* <strong>Página del complemento</strong> - https://plogins.com/es/plogins-enquire/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-enquire
* <strong>Informes de errores y solicitudes de funciones</strong> - https://github.com/wppoland/plogins-enquire/issues


= Features =

* Botón «Hacer una pregunta» en páginas de productos individuales, con una etiqueta que puedes cambiar, ubicada después del botón Añadir al carrito.
* El formulario se abre en un elemento `<dialog>` nativo: atrapa el foco mientras está abierto, se etiqueta a sí mismo para los lectores de pantalla y omite su animación cuando el visitante prefiere un movimiento reducido.
* Las consultas se envían a través de `wp_mail()` a cualquier dirección que establezcas (o al correo electrónico del administrador de tu sitio si lo dejas en blanco), con el nombre del producto y su enlace permanente en el cuerpo.
* Los mensajes de éxito y error aparecen en línea, por lo que no es necesario recargar la página.
* Manejo de spam: control nonce, un campo de honeypot y un límite de tasa de 30 segundos por visitante.
* Elige cuáles de los campos (nombre, correo electrónico y mensaje) son obligatorios y edita el botón, las etiquetas de los campos, el texto de éxito/error y el asunto del correo electrónico.
* Los ajustes se encuentran en WooCommerce → Enquire.
* Los pequeños archivos CSS y JS se cargan solo en las páginas de productos. El complemento declara compatibilidad con WooCommerce HPOS y con los bloques de Carrito y Pago.

== Installation ==

1. Sube el complemento a `/wp-content/plugins/enquire`, o instálalo desde Complementos → Añadir nuevo.
2. Actívalo. WooCommerce debe estar activo.
3. Ve a WooCommerce → Enquire para configurar el correo electrónico del destinatario, la etiqueta del botón y las opciones del formulario.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Sí. Enquire añade su botón a las páginas de productos individuales de WooCommerce y utiliza datos de productos de WooCommerce.

= Where are enquiries stored? =

No lo son. Cada consulta se envía por correo electrónico y no se escribe nada en tu base de datos.

= Where do enquiries get sent? =

A la dirección del destinatario que configures en la página de ajustes. Si la dejas vacía, se utiliza el correo electrónico del administrador de tu sitio.

= How is spam handled? =

Cada envío se compara con un campo nonce y un campo de honeypot oculto, y un visitante puede enviar como máximo una consulta cada 30 segundos.

= Can I customise the button label? =

Sí. Establece el texto del botón y el encabezado del formulario en <strong>WooCommerce → Enquire</strong>.


= Does this plugin work on WordPress Multisite? =

Sí. Este complemento es compatible con WordPress Multisite. Actívalo en red o en sitios concretos; cada sitio mantiene sus propios ajustes y datos.

== Screenshots ==

1. El formulario "Hacer una pregunta" en la página de un solo producto.
2. La página de ajustes WooCommerce → Enquire.

== External Services ==

Enquire no se conecta a ningún servicio externo. Los envíos de formularios se envían a tu propio sitio a través de `admin-ajax.php` y nunca abandonan tu servidor. Cada consulta se entrega con el propio `wp_mail()` (correo principal de WordPress) de tu sitio, utilizando cualquier programa de correo que tu sitio ya tenga. El complemento almacena solo sus propios ajustes (la opción `enquire_settings`) y un marcador de esquema (`enquire_db_version`), además de un transitorio de corta duración utilizado para el límite de frecuencia por visitante; el contenido de la consulta en sí no se escribe en la base de datos.

== Translations ==

Plogins Enquire incluye traducciones al polaco, alemán y español para la interfaz del complemento. El dominio de texto es `plogins-enquire`, por lo que los paquetes de idioma de WordPress.org también pueden anular o ampliar estas traducciones empaquetadas.

== Changelog ==

= 1.0.2 =
* Se añadieron traducciones integradas en polaco, alemán y español para la interfaz del complemento.

= 1.0.1 =
* Primera versión estable.

= 0.1.2 =
* Renombrado a Plogins Enquire for WooCommerce para un nombre de complemento más distintivo.

= 0.1.1 =
* Añade hooks de extensión para campos de formulario, validación, datos de carga de consulta y argumentos de correo electrónico saliente.
* Añade soporte para formularios de varias partes para que los complementos premium puedan adjuntar archivos a los correos electrónicos de consulta.

= 0.1.0 =
* Lanzamiento inicial.
