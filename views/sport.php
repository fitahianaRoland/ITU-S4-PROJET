<link rel="stylesheet" href="<?php echo site_url('assets/css/Liste.css');?>">
<div class="container">
        <div class="Depense_liste">
            <ul><li class="details-Liste">Details</li> <li class="details-Liste">Sports</li></ul>
            <table class="table table-striped table-class" id= "table-id">
                <thead>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>Modif</th>
                    <th>Delete</th>
                </tr>
                </thead>
    
                <tbody>
                <?php foreach($sports as $values){?>
                <tr>
                    <td><?php echo $values->idsport; ?></td>
                    <td><?php echo $values->nomsport; ?></td>
                    <td><a href="<?php echo base_url('Traitement/modifiersport?idsport='.$values->idsport)?>">modifier</a></td>
                    <td><a  href="<?php echo base_url('Traitement/supprimersport?idsport='.$values->idsport)?>"><i class="fa fa-trash"></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <!--		Start Pagination -->
            <div class='pagination-container' >
                <ul class="pagination">
                    <li class="prev"><a href="#" id="prev">&#139</a></li>
                    <!-- <li class="list"><a href="#">1</a></li>
                    <li class="list"><a href="#">2</a></li>
                    <li class="list"><a href="#">3</a></li> -->
                    <li class="next"><a href="#" id="next">&#155</a></li>
                </ul>
            </div>
            <div class="single-widget-area newsletter-widget mb-30">
                <form action="<?php echo base_url('Lien/page/index'); ?>" method="post">
                    <button type="submit" class="btn newsbox-btn w-100">Home</button>
                </form>
            </div>
        </div>
</div>


