<main>
    <section>
        <?php 
            while($row = $result->fetch_array()) {
                echo "<article><h2>".$title."</h2><i>".$date."</i><p>".$text."</p></article>";
            }
        ?>
    </section>
</main>