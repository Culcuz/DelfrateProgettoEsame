# DelfrateProgettoEsame

La seguente relazione illustrerà il funzionamento e conterrà le specifiche funzionali e non
funzionali del mio elaborato.

Finalità:

L’elaborato consisterà in un sito web che permetterà di acquistare in modo sicuro dei
prodotti di diversa natura online.
Sarà realizzato in modalità dinamica con accesso ad un database relazionale in MySQL e
prevederà una parte legata alla criptazione tramite algoritmo RSA volta allo scopo di
prevenire furti e frodi in fase di pagamento con carta di credito.

-----------------------------------------------------------------------------------------------------

Requisiti funzionali:

  • Un utente per poter procedere all’acquisto dovrà essere registrato.
  
  • Saranno presenti 2 barre poste una lateralmente e l’altra sovrastante la visualizzazione  
  dei prodotti che permetteranno di raggiunge le funzionalità del sito.
  
  • Sarà presente un form di registrazione per permettere di registrarsi.
  
  • Ogni utente una volta registrato avrà la possibilità di accedere alla sua area riservata.
  
  • L’area riservata conterrà un carrello con il riepilogo di tutti i prodotti selezionati.
  
  • La parte al di fuori dell’area riservata sarà visibile a tutti.
  
  • Sarà presente un form per l’inserimento dei dati sulla carta di credito.
  
  • Sarà presente un form per l’inserimento dei dati di spedizione.
  
  • Sarà presente un bottone di logout per effettuare la disconnessione.

-----------------------------------------------------------------------------------------------------

Requisiti non funzionali:

  • In fase di registrazione sarà presente un controllo per verificare che le due password
  inserite corrispondano.
  
  • Prima di avanzare alla fase di pagamento sarà obbligatorio accettare i termini e le
  condizioni.
  
  • Una volta effettuato l’accesso verranno visualizzati bottoni per utilizzare funzionalità
  extra.
  
  • In caso di eventuali errori/operazioni avvenute verranno comunicati/e all’utente
  tramite alert.
  
  • Tutti i dati dell’utente che ha effettuato la registrazione saranno salvati nel database.
  
  • La password dovrà necessariamente essere di almeno 8 caratteri e contenere almeno
  un numero, almeno una lettera maiuscola e almeno una lettera minuscola.
  
  • La password prima di venire inserita verrà criptata utilizzando due metodologie hash
  differenti.
  
  • Ogni articolo apparterrà ad una categoria.
