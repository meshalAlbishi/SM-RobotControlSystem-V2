<div class="main-base container">

    <div class="header">
        <h1>Base Controller</h1>
    </div>

    <form class="remote-panel" action="database/base.db.php" method="POST">

        <!-- forward button -->
        <div class="up">
            <button name="btnSubmit" value="F" type="submit" class="remote-btn"><i class="far fa-arrow-alt-up"></i></button>
        </div>

        <!-- middle line buttons(left, stop, right) -->
        <div class="middle">
            <button name="btnSubmit" value="L" type="submit" class="remote-btn"><i class="far fa-arrow-alt-left"></i></button>
            <button name="btnSubmit" value="S" type="submit" class="remote-btn stop-btn"><i class="far fa-stop-circle"></i></button>
            <button name="btnSubmit" value="R" type="submit" class="remote-btn "><i class="far fa-arrow-alt-right"></i></button>
        </div>

        <!-- backward button -->
        <div class="down">
            <button name="btnSubmit" value="B" type="submit" class="remote-btn "><i class="far fa-arrow-alt-down"></i></button>
        </div>

    </form>

</div>