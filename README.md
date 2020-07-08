# WordPress Ajax Filter Posts

## Description

Plugin per realizzare un filtro di ricerca per *post* e *custom post type*. Personalizzazione dell'originale, [*Aiajx Filter Posts*](https://github.com/Robbertdk/wordpress-ajax-filter-posts) di [**Robbert de Kuiper**](http://www.robbertdekuiper.com).

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