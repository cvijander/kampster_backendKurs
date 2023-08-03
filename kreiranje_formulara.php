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
            
            <button type="submit" name="btnSubmit" class="btn btn-primary">Posalji formu</button>
        </form>
       </div>
</body>

</html>