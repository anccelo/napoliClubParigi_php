
<h3 style="background-color: red"><?php echo $infoCodeSicurezza; ?> <h3>
<h5>inserisci codice per iscrizione a distanza  <br/>(da richiedere per email a <strong>napoliclubparigi@gmail.com<strong>)</h5>
<div class="form-mini-container">
    <form class="form-mini" method="post" action="model/dao_insertCode.php" style="margin-top:0px;">
    
        <div class="form-row">
            <input type="text" name="code" placeholder="enter the code here" required>
        </div>

        <div class="form-row form-last-row">
            <button type="submit">Submit Form</button>
        </div>

    </form>
</div>

