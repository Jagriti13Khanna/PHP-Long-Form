<?php

    // echo "<pre>";
    // var_dump($_GET);
    // echo "</pre>";

$ownername = $_GET["ownername"];
$address = $_GET["address"];
$country = $_GET["country"];
$city = $_GET["city"];
$province = $_GET["province"];
$postalcode = $_GET["postalcode"];
$homephone = $_GET["homephone"];
$workphone = $_GET["workphone"];
$cellphone = $_GET["cellphone"];
$email = $_GET["email"];
$petsname = $_GET["petsname"];
$petsage = $_GET["petsage"];
$petsbreed = $_GET["petsbreed"];
$petssex = $_GET["petssex"];
$petsweight = $_GET["petsweight"];
$spayed = $_GET["spayed"];
$employment = $_GET["employment"];
$occupation = $_GET["occupation"];
$employerinfo = $_GET["employerinfo"];
$unemployment = $_GET["unemployment"];
$formeremployerinfo = $_GET["formeremployerinfo"];
$dependents = $_GET["dependents"];
$dependentsage = $_GET["dependentsage"];
$maritalstatus = $_GET["maritalstatus"];
$annualincome = $_GET["annualincome"];
$incomeover50k = $_GET["incomeover50k"];
$otherfunds = $_GET["otherfunds"];
$pastyear = $_GET["pastyear"];
$affordability = $_GET["affordability"];
$treatmentcost = $_GET["treatmentcost"];
$moneyspent = $_GET["moneyspent"];
$initialexpenses = $_GET["initialexpenses"];
$veteran = $_GET["veteran"];
$clinicname = $_GET["clinicname"];
$treatmentname = $_GET["treatmentname"];
$essay = $_GET["essay"];
$hear = $_GET["hear"];
$signature = $_GET["signature"];

//$message = "$city : $province : $clinicname : ";
$message = "<h1>Review your information!</h1>";
$message .= "<table>";
$message .= "<tr><th>Pet owners name</th><td>$ownername</td></tr>";
$message .= "<tr><th>Address</th><td>$address</td></tr>";
$message .= "<tr><th>Country</th><td>$country</td></tr>";
$message .= "<tr><th>City</th><td>$city</td></tr>";
$message .= "<tr><th>Province</th><td>$province</td></tr>";
$message .= "<tr><th>Postal Code</th><td>$postalcode</td></tr>";
$message .= "<tr><th>Home Phone</th><td>$homephone</td></tr>";
$message .= "<tr><th>Work Phone</th><td>$workphone</td></tr>";
$message .= "<tr><th>Cell Phone</th><td>$cellphone</td></tr>";
$message .= "<tr><th>Email Address</th><td>$email</td></tr>";
$message .= "<tr><th>Pet's Name</th><td>$petsname</td></tr>";
$message .= "<tr><th>Pet's Age</th><td>$petsage</td></tr>";
$message .= "<tr><th>Pet's Breed</th><td>$petsbreed</td></tr>";
$message .= "<tr><th>Pet's Sex</th><td>$petssex</td></tr>";
$message .= "<tr><th>Pet's Weight</th><td>$petsweight</td></tr>";
$message .= "<tr><th>Spayed/Neutered</th><td>$spayed</td></tr>";
$message .= "<tr><th>Are you employed?</th><td>$employment</td></tr>";
$message .= "<tr><th>Occupation</th><td>$occupation</td></tr>";
$message .= "<tr><th>Name and address of employer?</th><td>$employerinfo</td></tr>";
$message .= "<tr><th>If unemployed, length of unemployment?</th><td>$unemployment</td></tr>";
$message .= "<tr><th>Name and address of former employer?</th><td>$formeremployerinfo</td></tr>";
$message .= "<tr><th>Number of human dependents</th><td>$dependents</td></tr>";
$message .= "<tr><th>Age of dependents</th><td>$dependenstage</td></tr>";
$message .= "<tr><th>Marital Status</th><td>$maritalstatus</td></tr>";
$message .= "<tr><th>Please indicate your total net annual family income</th><td>$annualincome</td></tr>";
$message .= "<tr><th>If over $50,000</th><td>$incomeover50k</td></tr>";
$message .= "<tr><th>Do you have access to other funds (savings, investments, friends, family, RRSP's, etc)?</th><td>$otherfunds</td></tr>";
$message .= "<tr><th>Special circumstances in the past year that affect your ability to pay for your pet's cancer therapies</th><td>$pastyear</td></tr>";
$message .= "<tr><th>How much can you afford (over and above travel expenses) towards the treatment (both cancer and post cancer) of your pet?</th><td>$affordability</td></tr>";
$message .= "<tr><th>What have you been quoted for your total treatment cost?</th><td>$treatmentcost</td></tr>";
$message .= "<tr><th>How much have you already spent in the diagnosis and treatment of this cancer?</th><td>$moneyspent</td></tr>";
$message .= "<tr><th>How did you pay for these initial expenses (i.e.: savings account, family, credit card, etc)?</th><td>$initialexpenses</td></tr>";
$message .= "<tr><th>Who is your veteran for routine care? By signing this you are agreeing that we will also be contacting them to complete forms for your application.</th><td>$veteran</td></tr>";
$message .= "<tr><th>Clinic Name</th><td>$clinicname</td></tr>";
$message .= "<tr><th>Cancer treatment Name</th><td>$treatmentname</td></tr>";
$message .= "<tr><th>Please write a short essay to answer the question...'Why I want my pet to receive cancer treatment?'</th><td>$essay</td></tr>";
$message .= "<tr><th>How did you hear about ACTSS?</th><td>$hear</td></tr>";
$message .= "<tr><th>Name</th><td>$signature</td></tr>";
$message .= "</table";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Long form</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    <?php 
        if (!isset($_GET["form-submit"])) {
    ?>
    <form action="form-submit.php" method="GET">
        <h4>Information</h4>
        <p>Required fields are followed by <strong>*</strong>.</p>
        
        <label for="ownername">Pet owners name</label>
        <input type="text" id="ownername" name="ownername" required>

        <label for="address">Address</label>
        <input type="text" id="address" name="address"  required>
        
        <label for="country">Country</label>
        <input type="text" id="country" name="country" required>

        <label for="city">City</label>
        <input type="text" id="city" name="city" required>

        <label for="province">Province</label>
        <select name="province" id="province" required>
            <option>Please select a province</option>
            <option value="AB">AB</option>
            <option value="BC">BC</option>
            <option value="SK">SK</option>
            <option value="OT">OT</option>
            <option value="MT">MT</option>
            <option value="NS">NS</option>
        </select>

        <label for="postalcode">Postal Code</label>
        <input type="text" id="postalcode" name="postalcode" required>

        <label for="homephone">Home phone</label>
        <input type="tel" id="homephone" name="homephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required> 

        <label for="workphone">Work phone</label>
        <input type="tel" id="workphone" name="workphone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

        <label for="cellphone">Cell phone</label>
        <input type="tel" id="cellphone" name="cellphone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

        <label for="email">Email address</label>
        <input type="email" id="email" name="email" required>

        <label for="petsname">Pets name</label>
        <input type="text" id="petsname" name="petsname" required>

        <label for="petsage">Pets Age</label>
        <input type="number" id="petsage" name="petsage" required>

        <label for="petsbreed">Pets Breed</label>
        <input type="text" id="petsbreed" name="petsbreed" required>

        <label for="petssex">Pets Sex</label>
        <input type="text" id="petssex" name="petssex" required>

        <label for="petsweight">Pets Weight</label>
        <input type="number" id="petsweight" name="petsweight" required>

        <label for="spayed">Spayed/Neutered</label>
        <select name="spayed" id="spayed" required>
            <option>Please select an option</option>
            <option value="Spayed">Spayed</option>
            <option value="Neutered">Neutered</option>
        </select>

        <hr>

        <h4>Employment Information</h4>

        <label for="employment">Are you employed?</label>
        <select name="employment" id="employment" required>
            <option>Please select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <label for="occupation">Occupation</label>
        <textarea name="occupation" id="occupation" cols="1" rows="1" required></textarea>

        <label for="employerinfo">Name and address of employer?</label>
        <textarea name="employerinfo" id="employerinfo" cols="5" rows="5" required></textarea>

        <label for="unemployment">If unemployed, length of unemployment?</label>
        <textarea name="unemployment" id="unemployment" cols="5" rows="5" required></textarea>

        <label for="formeremployerinfo">Name and address of former employer?</label>
        <textarea name="formeremployerinfo" id="formeremployerinfo" cols="5" rows="5" required></textarea>

        <hr>

        <h4>Additional Information</h4>

        <label for="dependents">Number of human dependents</label>
        <input type="number" id="dependents" name="dependents" required>

        <label for="dependentsage">Age of dependents</label>
        <textarea name="dependentsage" id="dependentsage" cols="5" rows="5" required></textarea>

        <label for="maritalstatus">Marital Status</label>
        <select name="maritalstatus" id="maritalstatus" required>
            <option>Please select an option</option>
            <option value="married">Married (and not separated)</option>
            <option value="widowed">Widowed (including living common law)</option>
            <option value="separated">Separated (including living common law)</option>
            <option value="divorced">Divorced (including living common law)</option>
            <option value="single">Single (including living common law)</option>
        </select>

        <label for="annualincome">Please indicate your total net annual family income</label>
        <select name="annualincome" id="annualincome" required>
            <option>Please select an option</option>
            <option value="10k">$0-$10,000</option>
            <option value="20k">$10,000-$20,000</option>
            <option value="30k">$20,000-$30,000</option>
            <option value="40k">$30,000-$40,000</option>
            <option value="50k">$40,000-$50,000</option>
        </select>

        <label for="incomeover50k">If over $50,000</label>
        <input type="text" id="incomeover50k" name="incomeover50k" required>

        <label for="otherfunds">Do you have access to other funds (savings, investments, friends, family, RRSP's, etc)?</label>
        <textarea name="otherfunds" id="otherfunds" cols="5" rows="5" required></textarea>

        <label for="pastyear">Special circumstances in the past year that affect your ability to pay for your pet's cancer therapies</label>
        <textarea name="pastyear" id="pastyear" cols="5" rows="5" required></textarea>

        <label for="affordability">How much can you afford (over and above travel expenses) towards the treatment (both cancer and post cancer) of your pet?</label>
        <input type="text" id="affordability" name="affordability" required>

        <label for="treatmentcost">What have you been quoted for your total treatment cost?</label>
        <input type="text" id="treatmentcost" name="treatmentcost" required>

        <label for="moneyspent">How much have you already spent in the diagnosis and treatment of this cancer?</label>
        <input type="text" id="moneyspent" name="moneyspent" required>

        <label for="initialexpenses">How did you pay for these initial expenses (i.e.: savings account, family, credit card, etc)?</label>
        <textarea name="initialexpenses" id="initialexpenses" cols="5" rows="5" required></textarea>

        <label for="veteran">Who is your veteran for routine care? By signing this you are agreeing that we will also be contacting them to complete forms for your application.</label>
        <input type="text" id="veteran" name="veteran" required>

        <label for="clinicname">Clinic Name</label>
        <input type="text" id="clinicname" name="clinicname" required>

        <label for="treatmentname">Cancer treatment Name</label>
        <input type="text" id="treatmentname" name="treatmentname" required>

        <label for="essay">Please write a short essay to answer the question..."Why I want my pet to receive cancer treatment?"</label>
        <textarea name="essay" id="essay" cols="5" rows="5" required></textarea>

        <label for="hear">How did you hear about ACTSS?</label>
        <textarea name="hear" id="hear" cols="5" rows="5" required></textarea>

        <hr>

        <p>I, the undersigned, do hereby certify that the information provided by me on this form is true. I am hereby applying for sponsorship from the Animal Cancer Therapy Subsidization Society. I give permission for ACTSS to contact my veterinarian and employer if additional information is necessary. I agree to share a picture and a short story of my pet if my application is successful and understand that the picture and the story will be displayed on the ACTSS website or ACTSS publications for promotional purposes. Surnames willl not be used. I also understand that I may be conatcetd with ACTSS related publications.</p>

        <p style="padding-top:1rem;">In order to complete your application please subvmit the legal document and applicable receipts via fax or scana nd email to info@actssalberta.ca</p>

        <label for="signature" style="padding-top:1rem;">Name</label>
        <input type="text" id="signature" name="signature" required>           

        <input type="submit" value="Submit" name="form-submit">
    </form>

    <?php
    
        }
        
        else {
            
            echo $message;
        }
    ?>    
</body>
</html>
