<!DOCTYPE html>
<html>
    <?php
    include_once('defaults/head.php');
    ?>
    <body>
        <div class="container bg-dark">
            <?php
            include_once ('defaults/header.php');
            include_once ('defaults/menu.php');
            include_once ('defaults/pictures.php');
            ?>
            <?php if(!empty($message)): ?>
                <div class="alert alert-success" role="alert">
                    <?=$message?>
                </div>
            <?php endif;?>
            <h5 class="text-light fw-bold">BIJ ONS DRAAIT ALLES OM SNEAKERS!</h5>
            <p class="text-light">
                Met meer dan 2500 klanten over de hele wereld is Sneaker One wereldwijd marktleider op het gebied van sportschoenen. Omdat we nauw samenwerken met ultieme topmerken, kunnen we altijd de beste, meest exclusieve productassortimenten aanbieden. Bij Sneaker One leven we voor sneakers, we ademen sneakers, we dromen over sneakers... We denken alleen maar aan sneakers en niets maakt ons gelukkiger dan onze fans constant op de hoogte houden van nieuwe trends.
                <br>
                <br>
                Onze collecties worden al meer dan 30 jaar samengesteld door en voor sneakerfans. Alleen de beste, meest relevante en spannendste producten komen op onze planken en in onze online catalogi terecht. "Als het verkocht wordt bij Sneaker One, dan is het goedgekeurd!" Dit wordt over ons gezegd. Of je nu al jarenlang dol bent op sneakers of gewoon even op zoek bent naar een nieuw paar schoenen; Sneaker One heeft alles wat je nodig hebt. Van top tot teen. Vergeet niet om een kijkje te nemen in ons geweldige assortiment kleding en accessoires! En denk eraan: de meeste van onze producten zijn nergens anders te vinden!

                Blijf op de hoogte en houd je sneaker-lifestyle springlevend met Sneaker One!
            </p><hr class="bg-light">
            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
