<!DOCTYPE HTML>
<html>
<head>          
    <title>newUser</title>
    
    <style>
        /*ran to hide options when necessary */
        .hide {
            display: none;
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <!--form to input user data-->
    <form action="adduser.php" method="POST">
        User Info: <br>
        <br>
        Username: <input type="text" name="Username"><br>
        Password: <input type="password" name="Password"><br>
        <br>
        <br>
        Delivery Address: <br>
        <br>
        House Number or Name: <input type="text" name="HouseNum"><br>
        Street Name: <input type="text" name="StreetName"><br>
        City/Town: <input type="text" name="City"><br>
        Postcode: <input type="text" name="Postcode"><br>
        County: <input type="text" name="County"><br>
        Country: <input type="text" name="Country"><br>
        <br>
        <!--shows/hides extra fields based on choice-->
        Is your Billing Address the same as your Delivery Address?: <br>
        <input type="radio" name="BllAdd" value="1" > Yes<br>
        <input type="radio" name="BllAdd" value="0" > No<br>
        <br>  
        

        <!-- div to hold all extra fields-->
        <div id="showhide0" class="hide">
        <!--extra fields for Billing Address-->
        <div id="testfield0" class="blladdfield1">
            <label>House Number or Name:
                <input type="text" name="BllAddHouseNum" placeholder="Enter value">
            </label>
        </div>
        <div id="testfield0" class="blladdfield1">
            <label>Street Name:
                <input type="text" name="BllAddStreetName" placeholder="Enter value">
            </label>
        </div>
        <div id="testfield0" class="blladdfield1">
            <label>City/Town:
                <input type="text" name="BllAddCity" placeholder="Enter value">
            </label>
        </div>
        <div id="testfield0" class="blladdfield1">
            <label>Postcode:
                <input type="text" name="BllAddPostcode" placeholder="Enter value">
            </label>
        </div>
        <div id="testfield0" class="blladdfield1">
            <label>County:
                <input type="text" name="BllAddCounty" placeholder="Enter value">
            </label>
        </div>
        <div id="testfield0" class="blladdfield1">
            <label>Country:
                <input type="text" name="BllAddCountry" placeholder="Enter value">
            </label>
        </div>
    </div>
        <br>

        <!--Choose Account Type-->
        Make your account a Seller Account? <br>
        <input type="checkbox" name="AccTyp" value="1"><br>
        <br>
        
        <!--submits data to table in database-->
        <input type="submit" value="Add User">
    </form>


<!-- JS to hide field when Billing Address == Delivery Address-->
<script>

//for all radios with name BllAdd, runs the code in brackets when state changed.
document.querySelectorAll('input[name="BllAdd"]').forEach(function(radio) {
    radio.addEventListener('change', function() {

        // Hides all extra fields
        document.querySelectorAll('.hide').forEach(function(div) {
            div.style.display = 'none';
        });

        // Show all fields under box with ID showhide
        let selected = this.value;
        let target = document.getElementById('showhide'+selected);
        if (target) {
            target.style.display = 'block';
        }
    });
});


</script>


</body>
<html>