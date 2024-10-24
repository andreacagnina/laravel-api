Project Management System 🚀

Benvenuto nel Project Management System, una piattaforma di gestione progetti creata con Laravel, che consente la creazione, modifica e gestione di progetti, tipi e tecnologie, con relazioni dinamiche tra di essi. Questo sistema include autenticazione, invio email tramite lead, e un'integrazione con Vue.js per la visualizzazione dei dati tramite API.
Descrizione del Progetto

Questo progetto permette di gestire progetti, associandoli a specifici tipi e a più tecnologie. Le relazioni tra le entità sono gestite tramite le seguenti logiche:

    La relazione Project - Type è di tipo one-to-many.
    La relazione Project - Technologies è di tipo many-to-many.

I dati di base sono stati generati utilizzando Faker, e sono presenti operazioni CRUD per la gestione completa delle entità.
Funzionalità principali

    Gestione Progetti (CRUD): Crea, visualizza, modifica ed elimina i progetti dal database.

    Gestione Tipi (CRUD): Crea e associa vari tipi di progetti. Ogni progetto può appartenere a un singolo tipo.

    Gestione Tecnologie (CRUD): Crea e gestisci tecnologie utilizzate nei progetti. Ogni progetto può essere associato a più tecnologie.

    Relazioni dinamiche:
        One-to-Many: Un progetto può appartenere a un solo tipo, ma un tipo può essere associato a più progetti.
        Many-to-Many: Ogni progetto può utilizzare più tecnologie, e ogni tecnologia può essere associata a più progetti.

    Seeder Faker: I database di tipi, tecnologie e progetti sono stati popolati usando Faker per generare dati di esempio.

    API Controller: Un'API RESTful è stata sviluppata per esporre i dati dei progetti a Vue.js, che viene utilizzato per la gestione dinamica del frontend.

    Autenticazione: Il sistema include una sezione autenticata per proteggere determinate funzionalità. Gli utenti devono essere registrati e autenticati per poter accedere alla gestione dei progetti.

    Lead per Email: È stata implementata una funzionalità di gestione dei lead con invio di email, permettendo la raccolta e l'invio di email per contatti e altre interazioni.

Tecnologie Utilizzate

    Laravel: Framework backend per la gestione delle funzionalità principali.
    Vue.js: Utilizzato per il rendering dinamico dei dati tramite l'API.
    Blade: Motore di template utilizzato per creare le viste.
    MySQL: Database utilizzato per la persistenza dei dati.
    Faker: Libreria per la generazione di dati casuali utilizzata nei seeder.
    Authentication: Sistema di autenticazione di Laravel per proteggere determinate sezioni.
    Mail: Sistema di gestione delle email con lead integrato.
