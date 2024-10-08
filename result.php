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
        <title>Reception Data</title>
    </head>
    <body>
        
        <header>
            <h1>
                Reception Data 
            </h1>
        </header>

        <main>
            <div>
                <div>
                    Paragrafo :
                    <p>
                        <?php echo $_GET['paragraph']; ?> 
                    </p> 
                </div>
                <div>
                   Lunghezza del Paragrafo :
                    <p>
                        <?php echo strlen($_GET['paragraph']); ?> 
                    </p> 
                </div>
            </div>
            <br>
            <div>
            
                <div>
                   Parola da censurare :
                   <p>
                        <?php echo $_GET['badword']; ?> 
                   </p> 
                </div>
            </div>
            <br>
            <hr>
            <div>
                <div>
                    Paragrafo censurato :
                    <p>
                                <!--  str_replace(porzioneDaSosituire, conCosa, stringa) - sostituisce una porzione di una stringa con un nuovo valore -->
                        
                        <?php 
                            $paragafoCensurato = str_replace($_GET['badword'], '***',$_GET['paragraph']); 

                            echo  $paragafoCensurato;
                        ?>
                    </p> 
                </div>
                <div>
                   Lungheza del Paragrafo  censurato:
                    <p>
                        <?php echo strlen($paragafoCensurato); ?> 
                    </p> 
                </div>
                <br>
                <hr>
                <a href="./index.php" target="_blank" >
                     Torna alla pagina precedente
                </a>

            </div>
            
        </main>
        <script>
            const parag = 'ciao ciao ciao come stai spero bene';
            const censureParag = parag.replaceAll('ciao', '***');

            console.log('parag:' , parag , parag.length);
            console.log('parola da censurare', censureParag, censureParag.length);

        </script>


    </body>
</html>