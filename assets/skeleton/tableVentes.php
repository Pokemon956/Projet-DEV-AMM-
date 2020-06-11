<!--    TABLE DU PANIER -->

<div class="table-responsive">

    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Produits</div>
                </th>

                <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Télécharger</div>
                </th>
            </tr>
        </thead>
        <?php if($okconnectey) { ?>
        <tbody id="tbodypanier">
            

            <tr class="rounded border-bottom border-light">



                <th scope='row' class='border-0'>
                    <div class='p-2'>
                        <img src='<?=$b['beat_cover'] ?>' alt='' width='70' class='img-fluid rounded shadow-sm'>
                        <div class='ml-3 d-inline-block align-middle'> 
                            <h5 class='mb-0'> <a href="view-beat.php?id=<?= $b['beat_id']?>" class='text-dark d-inline-block align-middle'><?=$b['beat_title'] ?></a>
                            </h5>
                            <a href="profils.php?profil_id=<?= $b['beat_author_id']?>" class="text-dark d-inline-block align-middle"> <span class='text-muted font-weight-normal font-italic d-block'><?=$b['beat_author'] ?></span></a> 
                        </div>
                        <?=$p['vente_date'] ?>
                    </div>
                </th>

                <td class='border-0 align-middle'>
                    <a href="audio/<?= $b['beat_source']?>" download>
                        <span class="text-black"><i class="fas fa-download"></i></span>
                    </a>
                </td>


            </tr>


            <?php

        }
    


            ?>

            <?php    } ?>

        </tbody>
    </table>

</div>

