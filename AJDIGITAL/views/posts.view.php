
<?php
ob_start() ?>


<section class="container p-5">
<div style="overflow-x:auto;">
    <table class="table text-center">
        <tr>
            <th>image</th>
            <th>title</th>
            <th>description</th>
            <th>date</th>
            <th colspan="2">Action</th>

        </tr>
    <!-- compteur des projet  -->
    <!-- pour i egale a 0 si i est inferieur au nombre de post tu me fais i+1 -->
        <?php 
        for ($i=0; $i < count($this->posts);$i++):?>
        <tr>
            <td class="align-middle"><img  src="public/images/<?=$posts[$i]->getimage(); ?>" class="pinterest-img" ></td>
            <td class="align-middle"><a href="<?= URL ?>posts/p/<?=$posts[$i]->getId(); ?>"><?=$posts[$i]->gettitle();?></a></td>
            <td class="align-middle"><?=$posts[$i]->getdescription();?></td>
            <td class="align-middle"><?= date('d/m/Y',$posts[$i]->getdate())?></td>
            <td class="align-middle"><a href="" class="btn btn-outline-success" onclick="share()">share</a> </td>
            <td class="align-middle"><a href="comment" class="btn btn-outline-primary" onclick="share()">comment</a> </td>
        </tr>
        <?php endfor; ?>
    </table>


<?php
$title="Articles";
$content=ob_get_clean();
require "views/template.php"

?>