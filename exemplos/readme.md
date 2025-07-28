# Anotações de estudos em PHP

- concatenation operator (.) - Juntar duas string
- $exemplo1 = "PHP\u{1F418}"; // DOUBLE QUOTED: strings que utilizam de aspas duplas
- $exemplo =  'PHP \u{1F596}'; // SINGLE QUOTED: string utiliza aspas simples
---
### Exemplo:
    
    echo "$exemplo1 $exemplo";

        // HereDock
        // NowDock

        // const ESTADO = "RJ"; // Não vai funcionar devido a não o ($) na frente 
        // echo "Moro no ESTADO";
        // echo "Moro no".ESTADO -> MORO NO RJ

        // echo "Estamos no ano de" . date('Y');

        // $nom = "Davy";
        // $snom = "Nogueira";

        // echo "$nom \"Minotauro\" $snom"; // Sequência de escape

        // ESCAPE SEQUENCES - \n (Nova Linha), \t (Tabulação H), \\ (Barra Invertida), \$ (Sinal de cifrão), \u{} (Codepoint Unicode)
# Treinos

### Variaeis são Case-Sensitive
<pre>
´´´

    <?php
         $color = "red";

    echo "My car is ". $color. "<br>";
    ECHO "My home is ". $COLOR ." <br>";
    EcHo "My blood is ".$Color."<br>" ;
    ?>
´´´
</pre>
