<div class="content">
        <form action="" method="POST" id="form1" name="form1">

            <label id="dintekst" for="textarea" style="padding: 5px;">Din tekst:</label>
            <textarea name="textarea" id="textarea" rows="4" cols="40" placeholder="f(x) = ax^2 + bx + c..."><?php if (isset($_POST['textarea'])) { $dintekst = $_POST['textarea']; echo $dintekst;} else { echo "";}?></textarea>
            <br>
            <br>
            <input type="submit" id="submitknap" class="submitbutton" name="submitknap" value="Konvertér">

        </form>

        <form action="" method="GET" id="slet">
            <span id="last"><input type="submit" value="Slet" class="submitbutton" id="sletknap"></span>
                <?php
                    if (isset($_GET['slet'])) {
                        $dintekst = "";
                    }
                ?>
            </form>
        <form>

        <br>
        <label id="ditoutput" for="outputarea" style="padding: 5px;">Dit output:</label>
            <div class="outputarea">
                <div class="outputtext">
                    <span>
                    <?php if (isset($_POST)) {echo nl2br($output);}?>
                    </span>
                </div>
            </div>
        </form>
    </div>