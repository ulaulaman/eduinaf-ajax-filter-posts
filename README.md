# Edu INAF Ajax Filter Posts

## Descrizione

Plugin per realizzare un filtro di ricerca per *post* e *custom post type*. Personalizzazione dell'originale, [*Ajax Filter Posts*](https://github.com/Robbertdk/wordpress-ajax-filter-posts) di [**Robbert de Kuiper**](http://www.robbertdekuiper.com).

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

Si consiglia di clonare il [*repository* originale](https://github.com/Robbertdk/wordpress-ajax-filter-posts) e seguire le istruzioni, in particolare se avete necessità di personalizzare parte del *frontend* del *plugin*.

## Changelog
* 0.2.5 Modificate le voci "Mostra"/"Nascondi"; tolto il *permalink* alla descrizione, che resta come solo testo: lasciato solo su *thumbnail* e titolo; aggiunto colore al bottone "Carica altro".
* 0.2.4 Impostata apertura dei *link* in una nuova finestra
* 0.2.3 Aumento delle dimensioni del titolo del post dentro il *loop* e correzione codice css.
* 0.2.2 Sistemata la ricerca in modo tale da non far comparire i *post* con *status* personalizzato.
* 0.2.1 Traduzione in italiano dei messaggi senza l'uso dei *file* multilingua. Modifiche nel *css* per migliorare leggibilità di parte della spalla dei filtri. Aggiunta del riassunto nel *loop* dei *post*.