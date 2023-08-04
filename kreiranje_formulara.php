<?php 
?>
<html>
    <head>
        <title>Primer HTML forme</title>
    </head>
    <body>
        <div class ="col-lg-4" style="margin: 0 auto;margin-top:50px">
        <form method ="get" action="obrada.php">
            <div class ="form-group">
                <label for="email">Ime:</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Upisite Vase email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-check">
               <label class="form-check-label">
                <input class = "form-check-input" type="radio" name="pol" id="muski" value="muski" checked>
                muski
              </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class ="form-check-input" type="radio" name="pol" id="zenski" value="zenski">
                    zenski
                </label>
            </div>
            <label for="pol">Posedujem znanje iz</label><br/>
            <div class ="checkbox">
                <label><input name="jezici[]" type="checkbox" value="HTML">HTML</label>
            </div>
            <div class="checkbox">
                <label><input name="jezici[]" type="checkbox" value="PHP">PHP</label>
            </div>
            <div class="checkbox">
                <label><input name="jezici[]"type="checkbox"value="SQL">SQL</label>
            </div>
            <div class="checkbox">
                <label><input name="jezici[]" type="checkbox" value="CSS">CSS</label>
            </div>


            <div class ="form-group">
                <select class = "form-control" name="grad" id="grad">
                    <option value="0" selected>Izaberi grad</option>
                    <option value="Beograd">Beograd</option>
                    <option value="Novi sad">Novi sad</option>
                    <option value="Krusevac">Krusevac</option>
                    <option value="Nis">Nis</option>
                    <option value="Kraljevo">Kraljevo</option>

                </select>
            </div>
            <?php
             $ip_adresa   = $_SERVER["REMOTE_ADDR"];
             $pretrazivac = getenv("HTTP_USER_AGENT");
              ?>
            <input type="hidden" name="skriveno" value="Neka skrivena vrednost">            
            <input type="hidden" name="ip_adresa" value="<?= $ip_adresa ?>">
             <input type="hidden" name="pretrazivac" value="<?= $pretrazivac ?>">
            <button type="submit" name="btnSubmit" class="btn btn-primary">Posalji formu</button>
        </form>
       </div>
</body>

</html>