=== Ajax Filter Posts Edu INAF ver ===
Contributors: Robbert de Kuiper, ulaulaman
Tags: eduinaf, inaf
Requires at least: 4.8.5
Tested up to: 4.9.5
Requires PHP: 7.0.18
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

Il plugin è una personalizzazione in italiano di [*Ajax Filter Posts*](https://github.com/Robbertdk/wordpress-ajax-filter-posts) di [**Robbert de Kuiper**](http://www.robbertdekuiper.com).
Il *changelog* si riferisce alle modifiche apportate per la personalizzazione dedicata a Edu INAF.

== Description ==
Il plugin funziona tramite uno *shortcode*:

```
[ajax_filter_posts post_type="recipe" tax="meal_type, food_type, diet_type"  posts_per_page="12"]
```

La personalizzazione ha implicato traduzione delle parti in inglese senza aggiungere un vocabolario.

## Parametri

- **post_type**
  Il tipo di post da mostrare. Di *default* filtra sugli articoli normali.

- **tax**
  Una lista, separata da virgole, delle tassonomie da utilizzare per filtrare i post. *Default* post_term.

- **post_per_page**
  Numero massimo di post da mostrare per ogni istanza. *Default* 12.

## Installazione

Si consiglia di clonare il [*repository* originale](https://github.com/Robbertdk/wordpress-ajax-filter-posts) e seguire le istruzioni.

== Changelog ==
* 0.2.1 Traduzione in italiano dei messaggi senza l'uso dei *file* multilingua. Modifiche nel *css* per migliorare leggibilità di parte della spalla dei filtri. Aggiunta del riassunto nel *loop* dei *post*.
