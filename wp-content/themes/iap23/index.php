<?php
/**
 * The main template file
 */

get_header(); ?>
<div class="container">
    <!-- 
        Aici o sa implementati card-ul primit in email. 
        Ce va trebui sa faceti? 
        1. Creati un fisier scss in folderul assets/scss numit _news_card.scss
        2. Includeti fisierul scss in style.scss folosind @import (aveti exemple in fisier)
        3. Sa nu uitati sa porniti live sass compile (indicatii si explicatii in fisierul primit pe email)
        5. Poza pentru articol o gasiti in assets/img/poza-articol.png

        Cateva mentiuni de implementare: 
            Poza ar trebui sa fie clickabila, adica sa fie un link pe poza.
            Poza are colturile rotujite 
            Dupa by vine un autor si acolo ar trebui sa fie un link, la fel si dupa in o categorie care la fel o sa fie un link
            Pe titlul articolului de asemenea trebuie sa fie un link.
    --> 
    
    <div class="news_card">
    </div>
</div>
<?php 
get_footer();