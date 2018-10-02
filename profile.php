

<div id="signup" class="w3-card-4 modal w3-margin-bottom w3-animate-zoom contenu"
     style="overflow:scroll;-webkit-overflow-scrolling:touch;display:none">


    <div class="w3-modal-content" style="overflow:scroll;-webkit-overflow-scrolling:touch;background: rgba(0,0,0,0.6)">

                <span onclick="document.getElementById('signup').style.display = 'none'"
                      class="w3-button w3-display-topright w3-red">&times;</span>
<p class="w3-center">
        <img src="img/profileimg.png" class="w3-center w3-circle" height="200" width="200"/></a>
</p>

        <div class="w3-container w3-dark-gray">
            <h2 class="w3-center ">Profile details</h2>

        </div>

        <form class="w3-container" action="./upload.php" method="post" enctype="multipart/form-data" style="overflow:scroll;
                          -webkit-overflow-scrolling:touch;">
            <fieldset style="border: 4px solid  teal">
                <legend class="w3-center w3-text-sand">Move in your next apartement</legend>
                <fieldset class="w3-card">

                    <legend class="w3-text-aqua">Fundamental details</legend>
                    <p>
                        <input class="w3-input" onkeypress="return onlyAlphabets(event, this);" name="nom"
                               type="text" placeholder="Enter your Name" required="">
                    </p>
                    <p>
                        <input class="w3-input" name="surnom" onkeypress="return onlyAlphabets(event, this);"
                               type="text" placeholder="Enter your First name" required="">
                    </p>
                    <input id="datetimepicker" class="w3-input" name="dnaissance"
                           placeholder="Date of birth" required="">

                </fieldset>
                <fieldset class="w3-card">
                    <legend class="w3-text-aqua">Other details</legend>
                    <p>
                        <input id="datetimepicker2" class="w3-input" name="dnaissance"
                               placeholder="Date of entrance" required="">
                    </p>
                    <p>
                        <label class="w3-text-aqua">Select your country</label>
                        <?php include "countries.html";?>



                    </p>

                    <p>
                        <input class="w3-input" name="email" type="email" placeholder="Enter E-mail">
                    </p>
                    <p>
                        <input class="w3-input" name="email" type="email" placeholder="User Id">
                    </p>
                    <p>
                        <label class="w3-text-aqua">Provide a document</label>
                        <?php include "documents.html";?>
                    </p>


                </fieldset>

            <fieldset style="border: 4px solid  teal">
                <legend class="w3-text-aqua w3-center">Click on save profile so that we remember your the next time!!!
                </legend>
                <p class="w3-margin-bottom">
                <div class="w3-center">
                    <button class="w3-red w3-btn w3-card-4" type="submit">Save profile <i class="fa fa-download"></i></button>

                </div>

                </p>
            </fieldset>
        </form>
    </div>
</div>





e