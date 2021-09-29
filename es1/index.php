<html>
    <head>
        <title>es.1 php</title>
    </head>
    <body>
    
        
        <h2>Realizzare una pagina php che stampa a video, in una tabella, i numeri interi divisibili per tre compresi tra 0 e 100, quanti sono e la loro media</h2>
        
        <table border="1">
        <?php
            $numMin=0;
            $numMax=100;
            
            $divMedia=0;
            
        
            $somma=0;
        
        
            for($i=0;$i < $numMax; $i = $i + 3){
                $somma += $i;
                $divMedia +=1;
                
                echo "<tr>
                    <td>$i</td>
                </tr>";
            }
        
            echo "<tr>
            <td> media:" . $somma/$divMedia . "</td>
            </tr>"
        
        
        
        
        
        
        ?>
        </table>
        
        
        
        
    </body>
</html>