<?php include('_head.php');?>
<?php include('_header.php');?>

<div id="container">
    <h2>Liste des devinettes</h2>

    <?php foreach($devinettes as $devinette):?>
        <div class="question">
            <h3><?php echo $devinette['name'];?></h3>
            <?php echo $devinette['question'];?>
            <hr/>
            <button style="">
                <a href="edit.php?id=<?php echo $devinette['id'];?>">
                    modifier
                </a>
            </button>
            <button class="deleteButton">
                <a href="delete.php?id=<?php echo $devinette['id'];?>">
                    effacer
                </a>
            </button>
            <button class="showAnswer">
                Voir la réponse
            </button>
            <div class="divAnswer">
                <?php echo $devinette['answer'];?>
            </div>
        </div>
    <?php endforeach;?>

</div>

<?php include('_footer.php');?>


<script type="text/javascript">
    $('.showAnswer').click(function(){
        $(this).next().toggle();
    })
</script>
