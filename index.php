
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <style>
        * {
            box-sizing: border-box;
        }

        .openBtn {
            display: flex;
            justify-content: left;
        }

        .openButton {
            border: none;
            border-radius: 5px;
            background-color: #1c87c9;
            color: white;
            padding: 14px 20px;
            cursor: pointer;
            position: fixed;
        }

        .loginPopup {
            position: relative;
            text-align: center;
            width: 100%;
        }

        .formPopup {
            display: none;
            position: fixed;
            left: 45%;
            top: 5%;
            transform: translate(-50%, 5%);
            border: 3px solid #999999;
            z-index: 9;
        }

        .formContainer {
            max-width: 300px;
            padding: 20px;
            background-color: #fff;
        }

        .formContainer input[type=text],
        .formContainer input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 20px 0;
            border: none;
            background: #eee;
        }

        .formContainer input[type=text]:focus,
        .formContainer input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        .formContainer .btn {
            padding: 12px 20px;
            border: none;
            background-color: #8ebf42;
            color: #fff;
            cursor: pointer;
            width: 100%;
            margin-bottom: 15px;
            opacity: 0.8;
        }

        .formContainer .cancel {
            background-color: #cc0000;
        }

        .formContainer .btn:hover,
        .openButton:hover {
            opacity: 1;
        }

        .row {
            margin-left: 5px;
            margin-right: 5px;
        }


        .col {
            float: left;
            width: 30%;
            padding: 0px;
        }

        .btn {
            color: white;
            border: none;
            background-color: #6096C6;
            padding: 8px 16px;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
            border-radius: 5px;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .temp {
  background-color: lightgrey;
  width: 40%;
  /* display: none; */
  border: 4px solid rgb(67, 70, 67);
  padding: 50px;
  margin: 20px;
}

        .header {
            overflow: hidden;
            background-color: #121818;
            padding: 8px 8px;
        }

        .header a {
            float: left;
            color: white;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a.logo1 {
            color: blue;
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {

            color: white;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }
    </style>
</head>

<body style="background-color:#E5E4E2">
<div>
    <div class="header">
        <a href="#default" class="logo">SRI-N <span style="color: skyblue">One</span></a>

        <div class="header-right">
            <a href="#home">HR</a>
            <a href="#contact">SE HUB</a>
            <a href="#about">SQE Portal</a>
            <a href="#about">Utilities</a>
            <i class="fa fa-phone" style="font-size:36px;color:white"></i>

        </div>
    </div>

    <div style="padding-left:20px">
        <center>
            <h4>View Request Delta Merge</h4>
        </center>
        <p style="text-align:right">Download Delta Merge tool</p>
        <button class="btn">Upstream Request</button>
    </div>


    <fieldset style="background-color:#E3EAF1; border: 3px solid #A8ACAF; border-radius:5px; margin: 2px; padding-left: 0.75em;
  padding-right: 0.75em;">
        <fieldset>
            <legend>Delta Merge Request Infromation:</legend>

            <table border="0" align="left" style="margin-left:0px;" cellspacing="3" cellpadding="0" colspan="10">
                <tr bgcolor='#B9C4E2'>
                    <td>Project Name</td>
                    <td> <input name="n1" type="text" cellpadding="20" required autofocus></input></td>
                </tr>
                <tr bgcolor='#B9C4E2'>
                    <td>Grade</td>
                    <td> <input name="l1" type="text" Style="color: #E3EAF1" required autofocus></input></td>
                </tr>
                <tr bgcolor='#B9C4E2'>
                    <td>Platform</td>
                    <td> <input name="l1" type="text" required autofocus></input></td>
                </tr>
                <tr bgcolor='#B9C4E2'>
                    <td>Resolution</td>
                    <td> <input name="l1" type="text" required autofocus></input></td>
                </tr>
                <tr bgcolor='#B9C4E2'>
                    <td>BB Chipset</td>
                    <td> <input name="l1" type="text" required autofocus></input></td>
                </tr>
                <tr bgcolor='#B9C4E2'>
                    <td>CB PSB Link</td>
                    <td> <input name="l1" type="text" required autofocus></input></td>
                </tr>
                <tr bgcolor='#B9C4E2'>
                    <td>Is RJIO?</td>
                    <td> <input name="l1" type="Checkbox" required autofocus></input></td>
                </tr>
                <tr bgcolor='#B9C4E2'>
                    <td>Include Teams</td>
                    <td> <input name="l1" type="text" required autofocus></input></td>
                </tr>


                <table border="0" align="left" style="margin-left:200px;" cellspacing="3" cellpadding="0" colspan="1">
                    <tr bgcolor='#B9C4E2'>
                        <td>Model Name</td>
                        <td> <input name="n1" type="text" cellpadding="20" required autofocus></input></td>
                    </tr>
                    <tr bgcolor='#B9C4E2'>
                        <td>Base Project</td>
                        <td> <input name="l1" type="text" Style="color: #E3EAF1" required autofocus></input></td>
                    </tr>
                    <tr bgcolor='#B9C4E2'>
                        <td>Camera</td>
                        <td> <input name="l1" type="text" required autofocus></input></td>
                    </tr>
                    <tr bgcolor='#B9C4E2'>
                        <td>RF</td>
                        <td> <input name="l1" type="text" required autofocus></input></td>
                    </tr>
                    <tr bgcolor='#B9C4E2'>
                        <td>AP Chipset</td>
                        <td> <input name="l1" type="text" required autofocus></input></td>
                    </tr>
                    <tr bgcolor='#B9C4E2'>
                        <td>Feature Support</td>
                        <td> <input name="l1" type="text" required autofocus></input></td>
                    </tr>
                    <tr bgcolor='#B9C4E2'>
                        <td>Request Date</td>
                        <td> <input name="l1" type="text" required autofocus></input></td>
                    </tr>
                    <tr bgcolor='#B9C4E2'>
                        <td>Screen</td>
                        <td> <input name="l1" type="text" required autofocus></input></td>
                    </tr>

                    <table border="0" align="left" style="margin-left:200px; margin-bottom:50px;" cellspacing="3"
                        cellpadding="0" colspan="1">
                        <tr bgcolor='#B9C4E2'>
                            <td>First Binary on 19 Server</td>
                            <td> <input name="n1" type="text" cellpadding="20" required autofocus></input></td>
                        </tr>
                        <tr bgcolor='#B9C4E2'>
                            <td>JDM</td>
                            <td> <input name="l1" type="text" Style="color: #E3EAF1" required autofocus></input></td>
                        </tr>
                        <tr bgcolor='#B9C4E2'>
                            <td>Network Type</td>
                            <td> <input name="l1" type="text" required autofocus></input></td>
                        </tr>
                        <tr bgcolor='#B9C4E2'>
                            <td>PL MySingle Id</td>
                            <td> <input name="l1" type="text" required autofocus></input></td>
                        </tr>
                        <tr bgcolor='#B9C4E2'>
                            <td>HW Rev.</td>
                            <td> <input name="l1" type="text" required autofocus></input></td>
                        </tr>
                        <tr bgcolor='#B9C4E2'>
                            <td>Fota Check</td>
                            <td> <input name="l1" type="text" required autofocus></input></td>
                        </tr>
                        <tr bgcolor='#B9C4E2'>
                            <td>Ownership</td>
                            <td> <input name="l1" type="text" required autofocus></input></td>
                        </tr>
                        <tr bgcolor='#B9C4E2'>
                            <td>JDM</td>
                            <td> <input name="l1" type="text" Style="color: #E3EAF1" required autofocus></input></td>
                        </tr>

        </fieldset>


    </fieldset>

    <table style="width:80%; margin-bottom:10px;" border="0" cellspacing="3" cellpadding="0" colspan="1">
        <tr>
            <th align="left">Bulid Information</th>
            <th>SYSTEM</th>
            <th>VENDOR</th>
            <th>MERGE</th>
        </tr>
        <tr bgcolor='#B9C4E2'>
            <td>Base CL</td>
            <td> <input id="base_s" name="n1" size="60" type="text" required autofocus ></input></td>
            <td> <input id="base_v" name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
            <td> <input id="base_m" name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
        </tr>
        <tr bgcolor='#B9C4E2'>
            <td>Shelve CL</td>
            <td> <input id="shelve_s" name="l1" type="text" size="60"  required autofocus></input></td>
            <td> <input id="shelve_v" name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
            <td> <input id="shelve_m" name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
        </tr>
        <tr bgcolor='#B9C4E2'>
            <td>Partial CL</td>
            <td> <input id="partial_s" name="l1" type="text" size="60" required autofocus></input></td>
            <td> <input id="partial_v" name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
            <td> <input id="partial_m" name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
        </tr>
        <tr bgcolor='#B9C4E2'>
            <td>Build Command</td>
            <td> <input name="l1" type="text" size="60" required autofocus></input></td>
            <td> <input name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
            <td> <input name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
        </tr>
        <tr bgcolor='#B9C4E2'>
            <td>Previous Version Workspace</td>
            <td> <input name="l1" type="text" size="60" required autofocus></input></td>
            <td> <input name="n1" type="text" size="60" cellpadding="20" required autofocus ></input></td>
            <td> <input name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
        </tr>
        <tr bgcolor='#B9C4E2'>

            <td>Local PBS Link*</td>
            <td>
                <input name="n1" type="text" size ="60" id="system_local_pbs" value="http://deltamerge.herokuapp.com/dwld_me.php "></input>
            </td>

            <td> <input name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
            <td> <input name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
        </tr>
        <tr bgcolor='#B9C4E2'>
            <td>Build Opts</td>
            <td> <input name="l1" type="text" size="60" required autofocus></input></td>
            <td> <input name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
            <td> <input name="n1" type="text" size="60" cellpadding="20" required autofocus></input></td>
        </tr>
    </table>
</div>
<center>
    <button class="btn" id="myBtn">
    Update
    </button>
    <br>
</center>
    
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <center>
                <p id=choice_1>
                    Issues in Samples. <br>
                    Please select correct choices for updation.
                </p>
                <p id=choice_verify_1 style="display:none">
                    Responses To Be Update.
                </p>
            </center>
            <br>
            <div id="choice_2">
                Property_1:
                <input class="prop" type="radio" name="Property_1" value="YES" required>Yes
                <input class="prop" type="radio" name="Property_1" value="NO" checked>No
                <br>
                <br>
                Property_2:
                <input class="prop" type="radio" name="Property_2" value="YES">Yes
                <input class="prop" type="radio" name="Property_2" value="NO" checked>No
                <br>
                <br>
                Property_3:
                <input class="prop" type="radio" name="Property_3" value="YES">Yes
                <input class="prop" type="radio" name="Property_3" value="NO" checked>No
                <br>
                <br>
                Property_4:
                <input class="prop" type="radio" name="Property_4" value="YES">Yes
                <input class="prop" type="radio" name="Property_4" value="NO" checked>No
                <br>
                <br>
                Property_5:
                <input class="prop" type="radio" name="Property_5" value="YES">Yes
                <input class="prop" type="radio" name="Property_5" value="NO" checked>No
                <br>
                <br>
                Property_6:
                <input class="prop" type="radio" name="Property_6" value="YES">Yes
                <input class="prop" type="radio" name="Property_6" value="NO" checked>No
            </div>
            <div id="result"></div>
            <center id="choice_3">
                <button type="button" class="btn" onclick="displayRadioValue()">Verify
                </button>
            </center>
            <center id="choice_verify_2" style="display:none">
                <button type="button" class ="btn" onclick="editRadioValue()">Edit
                </button>
                <button type="button" class="btn" onclick="UpdateRadioValue()">Update
                </button>
            </center>
            <br>
            <br>
        </div>
    </div>
    <div>
        <br>
        <center>
            <h3 id="update_1" style="display:none">UPDATED VALUES</h3>
        </center>
       <center><p class="temp" id="res_update"style="display:none" ></p></center> 
    </div>
    <script>
        function displayRadioValue() {
            document.getElementById("choice_1").style.display = "none";
            document.getElementById("choice_2").style.display = "none";
            document.getElementById("choice_verify_1").style.display = "block";
            document.getElementById("result").innerHTML = "";
            var ele = document.getElementsByClassName('prop');
            for (i = 0; i < ele.length; i++) {

                if (ele[i].type = "radio") {

                    if (ele[i].checked)
                        document.getElementById("result").innerHTML
                            +="<p>"+ ele[i].name + " Value:-  "
                            + "<span class='res'>"+ele[i].value +"</span>"+ "</p>";
                }
            }
            document.getElementById("choice_3").style.display = "none";
            document.getElementById("choice_verify_2").style.display = "block";
        }

        function editRadioValue() {
            document.getElementById("choice_1").style.display = "block";
            document.getElementById("choice_2").style.display = "block";
            document.getElementById("choice_3").style.display = "block";
            document.getElementById("result").innerHTML = "";
            document.getElementById("choice_verify_1").style.display = "none";
            document.getElementById("choice_verify_2").style.display = "none";

        }

        function UpdateRadioValue() {
            // var modal = document.getElementById("myModal");
             var ele = document.getElementById('result');
             
            // var base_s = document.getElementById("base_s");
            // var base_v = document.getElementById("base_v");
            // var base_m = document.getElementById("base_m");
            // var shelve_s = document.getElementById("shelve_s");
            // var shelve_v = document.getElementById("shelve_v");
            // var shelve_m = document.getElementById("shelve_m");

            // base_s.value=ele[0].innerText;
            // base_v.value=ele[1].innerText;
            // base_m.value=ele[2].innerText;
            // shelve_s.value=ele[3].innerText;
            // shelve_v.value=ele[4].innerText;
            // shelve_m.value=ele[5].innerText;
            document.getElementById('res_update').innerHTML="";
            //for(i=0;i<ele.length;i++){
                document.getElementById('res_update').innerHTML+="<p>"+ ele.innerHTML+ "</p>"
            //}
            alert("Successfully Updated");
            document.getElementById("update_1").style.display = "block";
            document.getElementById("res_update").style.display="block";
            modal.style.display = "none";
            
        }
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>
