

<div id="login" class="w3-card-4 modal w3-margin-bottom w3-animate-zoom contenu"
     style="overflow:scroll;-webkit-overflow-scrolling:touch;display:none">


    <div class="w3-modal-content" style="overflow:scroll;-webkit-overflow-scrolling:touch;background: rgba(0,0,0,0.6)">

                <span onclick="document.getElementById('login').style.display = 'none'"
                      class="w3-button w3-display-topright w3-red">&times;</span>
        <p class="w3-center">
            <img src="img/profileimg.png" class="w3-center w3-circle" height="200" width="200"/></a>
        </p>

        <div class="w3-container w3-dark-gray">
            <h2 class="w3-center ">Login</h2>

        </div>

        <form class="w3-container" action="./upload.php" method="post" enctype="multipart/form-data" style="overflow:scroll;
                          -webkit-overflow-scrolling:touch;">
            <fieldset style="border: 4px solid  teal">
                <legend class="w3-center w3-text-sand">Move in your next apartement</legend>
                <fieldset class="w3-card">

                    <legend class="w3-text-aqua">Login details</legend>

                    <p>
                        <input class="w3-input" name="mail" onkeypress="return onlyAlphabets(event, this);"
                               type="text" placeholder="Enter E-mail" required="">
                    </p>
                    <p class="w3-row">
                        <input class="w3-input w3-border-right pass" name="password"
                               placeholder="Enter password" type="password" required=""/>

                    </p>
                    <p class="w3-center">
                        <i class="fa fa-eye w3-xlarge w3-text-white" onclick="showPass()"></i>
                    </p>


                </fieldset>


            </fieldset>

            <fieldset style="border: 4px solid  teal">

                <p class="w3-margin-bottom">
                <div class="w3-center">
                    <button class="w3-red w3-btn w3-card-4" type="submit">Login <i class="fa fa-unlock-alt"></i></button>

                </div>

                </p>
            </fieldset>
        </form>
    </div>
</div>
<script>

    function showPass()
    {
        var credentials=  document.getElementsByClassName("pass");
        for(var i =0;i<credentials.length;i++)
        {
            if(credentials[i].type=="password")
            {
                credentials[i].type="text";

            }
            else if(credentials[i].type="text")
            {
                credentials[i].type="password";

            }
        }
    }
</script>




e