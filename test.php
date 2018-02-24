<div class="container-fluid">
    <div class="col-4 preview">
        <div class="serviceTitle">
            Coup d'oeil
        </div>
        <div>
            <p>
				<span>
					<i class="material-icons">book</i>
				</span>
                <?= $nombreChapters ?>
                Chapitres
            </p>
            <p>
				<span>
					<i class="material-icons">comment</i>
				</span>
                <?= $nombreComments?>
                Commentaires
            </p>
        </div>
    </div>

    <div class="row displayChapters">
        <div class="col-10 displayIndexChapters">
            <h2>
                Les chapitres:
            </h2>
            <table class="table">
                <tr>
                    <th>Titre</th>
                    <th>Ajout</th>
                    <th>Modif</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($listeChapters as $chapters):?>

                    <tr>
                        <td><?= $chapters['title'];?></td>
                        <td>le <?= $chapters['addDate']->getDate();?></td>
                        <td><?= $chapter->maMethode()?></td>
                        <td>
                            <a href="/admin/chapters-update-<?= $chapters[id];?>.html">
                                <i class="material-icons">create</i>
                            </a>
                            <a class="deleteChap" id="delete-<?= $chapters[id];?>">
                                <i class="material-icons">delete_sweep</i>
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>


                <div id="newChapter"></div>


                <?php

                    class chapter
                    {
                        public function getDate($format = "d/m/Y")
                        {
                            // code

                            return $date;
                        }
                    }


                ?>


                <script type="text/javascript">
                    $('.deleteChap').click(function(){
                        var id = $(this).attr('href');
                        var el = id.split('-');
                        var chapter_id = el[1];


                        var url = "/admin/chapters-update/";


                        $('#newChapter').load(url+id);

                        modal.close();
                        return false;

                    })
                </script>
