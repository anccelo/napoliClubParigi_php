<div class="form-mini-container">

 
            <form class="form-mini" method="post" action="model/dao_finanze.php" style="margin-top:100px;">
                <h1>ENTRATE/USCITE</h1>

                <div class="form-row">
                    <div class="form-radio-buttons">

                        <div>
                            <label>
                                <input type="radio" name="direzione"  value="entrata" required>
                                
                                <span style="color:#00ff00;">ENTRATA</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="direzione" value="uscita" required>
                                <span style="color:red;">USCITA</span>
                            </label>
                        </div>

                    </div>
                </div>
                
                <div class="form-row">
                    <input type="text" name="cifra" placeholder="CIFRA nel formato xxxxx.yz" required>
                </div>

                <div class="form-row">
                    <input type="text" name="label" placeholder="label" required>
                </div>

                          <div class="form-row">
                    <div class="form-radio-buttons">

                        <div>
                        <p>c'é una fattura?</p>
                            <label>
                                <input type="radio" name="fattura"  value="si" required>
                                
                                <span>SI</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="fattura" value="no" required>
                                <span>NO</span>
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-row">
                    <input type="text" name="commenti" placeholder="commenti" >
                </div>

                <div class="form-row form-last-row">
                    <button type="submit">Submit Form</button>
                </div>

            </form>
        </div>