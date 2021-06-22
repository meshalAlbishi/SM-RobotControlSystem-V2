<div class="main">

    <!-- title -->
    <div class="header">
        <h1>Robot Control System</h1>
    </div>

    <!-- robot sliders container-->
    <div class="container">

        <form action="index.php" method="POST">

            <div id="sliders">

                <?php

                for ($i = 0; $i < count($engineValues); $i++) {
                ?>

                    <div class="slider-box">

                        <label for="">Engine <?php echo $engineValues[$i][0] ?> </label>

                        <input class="range" type="range" value="<?php echo $engineValues[$i][1] ?>" min="0" max="180" step="90" name="engine<?php echo $engineValues[$i][0] ?>">

                        <span class="range-value"><?php echo $engineValues[$i][1] ?></span>
                    </div>

                <?php } ?>

            </div>

            <!-- buttons -->
            <div class="buttons">
                <?php echo $enign ?>
                <button type="submit" name="submit">Save</button>
                <input id="power" type="checkbox" <?php echo ($isPower == 1 ? 'checked' : ''); ?>>

        </form>

    </div>

</div>