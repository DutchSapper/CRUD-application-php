# CRUD-application (Create, Read, Update, Delete)

# SQL-script voor MVC CRUD-applicatie

Dit script maakt de database **`crud_articles`** aan en voert de volgende acties uit:

1. Maakt de database **`crud_articles`** aan (indien deze nog niet bestaat).
2. Maakt de tabel **`articles`** aan met de volgende kolommen:
   - `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
   - `title` (VARCHAR, 255 tekens, niet leeg)
   - `content` (TEXT)
   - `created_at` (TIMESTAMP, standaardwaarde: huidige datum/tijd)
3. Voegt demo-data toe aan de tabel **`articles`**.

---

## Hoe voer je het script uit?

### Optie 1: Via phpMyAdmin of MySQL Workbench
1. Open phpMyAdmin of MySQL Workbench.
2. Selecteer een database (bijv. `mysql`).
3. Ga naar het tabblad **SQL**.
4. Klik op **"Bestand kiezen"** en selecteer het `data.sql`-bestand.
5. Klik op **"Uitvoeren"** (of "Go").

### Optie 2: Via de MySQL-console (command line)
Voer het volgende commando uit in de terminal of command prompt:
```bash
mysql -u [gebruikersnaam] -p < data.sql


# School assignment
Programmeer een MVC CRUD-applicatie met database in PHP.

Maak een eenvoudige CRUD-applicatie, zoals hieronder is weergegeven in het artikel.

Lijst van artikelen. (Bron: OGN.)

Artikel bewerken. (Bron: OGN.)

Het betreft hier een simpele CRUD-operatie (Create, Read, Update en Delete) op één tabel. Opmaak mag grotendeels buiten beschouwing gelaten worden.

Zet een mappenstructuur op volgens het MVC-ontwerp. 

Eisen van programma

    De applicatie werkt volgens het Model View Controller-principe, ook qua mappenstructuur.

    De applicatie kan nieuwe artikelen aanmaken, weergeven, updaten en verwijderen volgens CRUD.

    Naamgevingen van functies en bestanden is in het Engels. In de IT-wereld is het namelijk gebruikelijk dat alles in het Engels wordt geprogrammeerd.

Instructie maken van applicatie

    Maak een index.php aan; de volgende logica kan gebruikt worden bij het bestand Voorbeeld-ophalen-Articles-vanuit-database.txt in de root map.

    Maak op basis van de require_once in het voorbeeld hierboven de overige PHP-bestanden en mappen aan voor uw webapplicatie.

    Maak in elke controller code die wijst naar de juiste weergave voor de pagina.

    Maak voor artikel een model om objecten aan te maken in de database; een deel van de voorbeeldcode die u kunt gebruiken staat in het bestand Voorbeeldcode-model-om-objecten-aan-te-maken-in-de-database.txt. (Voer bij $db wel nog de eigen connectionstring in.)

    Maak eerst een database aan in MySQL en configureer deze in de applicatie. Vervolgens kan een model worden gemaakt om gegevens uit de tabel op te halen, waarna de controller deze kan doorsturen naar de view om te tonen aan de gebruiker.

    Maak in de Article -controller een extra methode 'create' aan waarmee nieuwe artikelen toegevoegd kunnen worden. Hieraan wordt de view create.php gekoppeld. Maak in de create.php een formulier waarmee nieuwe artikelen aangemaakt kunnen worden.

    Maak na het aanmaken van het tonen en aanmaken van de artikelen, de updatefunctie. Maak gebruik van het artikelnummer. Hieronder een voorbeeld hoe het SQL-script eruit kan zien:

    Voorbeeld van het SQL-script. (Bron OGN.)

    Toon de informatie die uit deze functie komt, in de view edit.php. Koppel de actie uit edit.php aan de updatefunctie in de controller. Deze roept vervolgens de update aan in het model met de bijbehorende query.

    Maak de deletefunctie in de controller en model met de verwijderacties. Na het uitvoeren van deze actie wordt de gebruiker doorgestuurd naar de hoofdpagina.

    Voeg een aantal (demo)artikelen toe aan de database vanuit de code.

Reflectieverslag

U maakt een beknopt verslag (maximaal 1.200 woorden) waarin u toelichting geeft op:

    de technische keuzes: hoe hebt u deze opdracht aangepakt

    de fouten in de code en wat u hebt gedaan om de fouten eruit te halen. Geef dit weer per versie.

Tips & trucs

    Link in de view index.php de knoppen Bewerken en Verwijder het artikelnummer.

    Maak gebruik van een .htaccess-bestand als de applicatie in een submap ontwikkeld wordt. Zoek op internet wat hierin moet komen te staan.

Op te leveren producten

Lever de volgende bestanden op; maak gebruik van mappen voor overzicht:

In te leveren bijlage:

index.php

/controllers

     ArticleController.php

/models

     Article.php

/views

     /article

/sql

data.sql (demo data + aanmaken van table)

index.php

Feedbackaspecten

    Programma werkt en voldoet aan de eisen - output.

    Toepassing van PHP en SQL - bestanden.

    Toepassing van PHP en SQL - MVC design pattern.

    Reflectieverslag.