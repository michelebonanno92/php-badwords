<!-- Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all'utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sending Data</title>
    </head>
    <body>
        
        <header>
            <h1>
                Sending Data 
            </h1>
        </header>

        <main>
            
            <form action="./result.php" method="GET">
                <div>
                    <div>
                        <label for="paragraph">
                            Paragrafo
                        </label>
                    </div>
                    <textarea name="paragraph" id="paragraph" placeholder="Inserisci il tuo testo"></textarea>
                </div>
                <br>
                <div>
                    <div>
                        <label for="badword">
                            Parola da censurare
                        </label>
                    </div>
                    <input type="text" name="badword" id="badword" placeholder="Inserisci il tuo testo..." >
                </div>
                <br>
                <div>
                    <button type="submit">
                        INVIA
                    </button>
                </div>
            </form>
        </main>

    </body>
</html>