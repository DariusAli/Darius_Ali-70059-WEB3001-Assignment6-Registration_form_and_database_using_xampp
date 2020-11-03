<?php
$connect = mysqli_connect("localhost", "root", "", "child_school_application") or die ("Please, check the server connection.");

$School_Name = $_POST['School_Name'];
$Sname = $_POST['Sname'];
$Fname = $_POST['Fname'];
$Oname = $_POST['Oname'];
$Nationality = $_POST['Nationality'];
$DOB = $_POST['DOB'];
$BC_PIN = $_POST['BC_PIN'];
$gender = $_POST['gender'];
$Religion = $_POST['Religion'];
$address = $_POST['address'];
$student_permit = $_POST['student_permit'];
$immunisation = $_POST['immunisation'];

$P1_name = $_POST['P1_name'];
$P1_Relation = $_POST['P1_Relation'];
$P1_email = $_POST['P1_email'];
$P1_contact = $_POST['P1_contact'];
$P1_address = $_POST['P1_address'];

$P2_name = $_POST['P2_name'];
$P2_Relation = $_POST['P2_Relation'];
$P2_email = $_POST['P2_email'];
$P2_contact = $_POST['P2_contact'];
$P2_address = $_POST['P2_address'];

$siblings = $_POST['siblings'];

$S1_Name = $_POST['S1_Name'];
$S1_Class = $_POST['S1_Class'];

$S2_Name = $_POST['S2_Name'];
$S2_Class = $_POST['S2_Class'];

$S3_Name = $_POST['S3_Name'];
$S3_Class = $_POST['S3_Class'];

$S4_Name = $_POST['S4_Name'];
$S4_Class = $_POST['S4_Class'];

$sql1 = "INSERT INTO child_applicant(Applicant_ID, School, Surname, First_Name, Other_Name, Nationality, DOB, BC_PIN, Sex, Religion, C_Address, Student_Permit, Immunisation, Siblings, Sib1_Name, Sib1_Class, Sib2_Name, Sib2_Class, Sib3_Name, Sib3_Class, Sib4_Name, Sib4_Class) VALUES (' ', '$School_Name', '$Sname', '$Fname', '$Oname', '$Nationality', '$DOB', '$BC_PIN', '$gender', '$Religion', '$address', '$student_permit', '$immunisation', '$siblings', '$S1_Name', '$S1_Class', '$S2_Name', '$S2_Class', '$S3_Name', '$S3_Class', '$S4_Name', '$S4_Class')";

$sql2 = "INSERT INTO parent_guradian(PG_ID, PG_Name, Relation, Email, Contact_Num, PG_Address) VALUES(' ','$P1_name', '$P1_Relation', '$P1_email', '$P1_contact', '$P1_address')";

$result1 = mysqli_query($connect, $sql1) or die(mysqli_error($connect));
$result2 = mysqli_query($connect, $sql2) or die(mysqli_error($connect));
if ($result1 && $result2)
{
    echo "Application Successful";
}
else
{
    echo "Error submitting application";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primary School Application Form</title>
    <link rel="stylesheet" type="text/css" href="../css/form_style.css">
    <link rel="stylesheet" type="text/css" href="../css/print_layout.css">
    
</head>
<body>
    <div class="header">
        <img src="../images/TT_Coat_of_Arms.jpg" alt="Trinidad and Tobago Coat of Arms" width="150" height="150" class="center_image_header">
        <h1>Ministry Of Education</h1>
        <h2>Application For Admission Into A Public Primary School</h2>
    </div>
    <div class="col-5 col-s-6 form_body">
        <form name="childInfo" autocomplete="on" class="childInfo" method="post">
            <fieldset>
                <legend>Criteria for acceptance</legend>
                <label>Criteria for acceptance into Infant Year 1 (as Stated in Circular Memorandum No.2 of 2019):</label>
                    <ol>
                        <li>Child must have attained the age of five (5) in the term in which he/she is to be admitted.</li>
                        <li>Child resides within three (3) Kilometers of the school to which application is made.</li>
                    </ol>
            </fieldset>
            <fieldset>
                <legend>School Name:</legend>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="School_Name">School Name:</label>&nbsp;&nbsp;&nbsp;
                <?php echo $_POST["School_Name"]?>
            </fieldset>
            <br>
            <fieldset class="CI">
                <legend>Child's Information:</legend>
                <br>
                    <fieldset>
                        <legend>Name and Nationality</legend>
                        <div class="Surename">
                            <label for="Sname">Surname:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $_POST["Sname"]?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="First_Name">
                            <label for="Fname">First Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $_POST["Fname"]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <br>
                        <br>
                        <div class="Other_Name">
                            <label for="Oname">Other Name(s):</label>
                            <?php echo $_POST["Oname"]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="National">
                            <label for="Nationality">Nationality:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $_POST["Nationality"]?>
                        </div>
                    </fieldset>
                <br>
                    <fieldset>
                        <legend>Date of Birth, Birth Certificate PIN, Sex, Religion</legend>
                        <div class="DateOfBirth">
                            <label for="DOB">Date Of Birth:</label>
                            <?php echo $_POST["DOB"]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="B_PIN">
                            <label for="BC_PIN">Birth Certificate PIN:</label>
                            <?php echo $_POST["BC_PIN"]?>
                        </div>
                        <br>
                        <br>
                        <div class="Sex">
                            <label>Sex:</label> &nbsp;&nbsp;&nbsp;
                            <?php echo $_POST["gender"]?>
                        </div>
                        <div class ="Relig">
                            <label for="Religion">Religion:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $_POST["Religion"]?>
                        </div>
                    </fieldset>         
                <br>
                    <fieldset>
                        <legend>Address, Immunisation, Student Permit</legend>
                        <div class="addr">
                            <label for="address">Address:</label>
                            <?php echo $_POST["address"]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="permit">
                            <label>Valid Student Permit:</label> &nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $_POST["student_permit"]?>
                        </div>
                        <br>
                        <br>
                        <div class="immu">
                            <label>Is your child's immunisation up to date?</label>&nbsp;
                            <?php echo $_POST["immunisation"]?>
                        </div>
                    </fieldset>          
            </fieldset>

            <fieldset class="PGI">
                <legend>Family Information</legend>
                <br>
                <fieldset>
                    <legend>Parent 1 / Guardian 1</legend>
                    <div class="First_parent_name">
                        <label for="P1_name">Name:</label>
                        <?php echo $_POST["P1_name"]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="First_parent_relation">
                        <label for="P1_Relation">Relation to applicant:</label>
                        <?php echo $_POST["P1_Relation"]?>
                    </div>
                    <br>
                    <br>
                    <div class="First_parent_email">
                        <label for="P1_email">Email:</label>
                        <?php echo $_POST["P1_email"]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="First_parent_contact">
                        <label for="P1_contact">Contact:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $_POST["P1_contact"]?>
                    </div>
                    <br>
                    <br>
                    <div class="First_parent_address">
                        <label for="P1_address">Address:</label>
                        <?php echo $_POST["P1_address"]?>
                    </div>
                </fieldset>
                <br>
                <fieldset>
                    <legend>Parent 2 / Guardian 2</legend>
                    <div class="Second_parent_name">
                        <label for="P2_name">Name:</label>
                        <?php echo $_POST["P2_name"]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="Second_parent_relation">
                        <label for="P2_Relation">Relation to applicant:</label>
                        <?php echo $_POST["P2_Relation"]?>
                    </div>
                    <br>
                    <br>
                    <div class="Second_parent_email">
                        <label for="P2_email">Email:</label>
                        <?php echo $_POST["P2_email"]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="Second_parent_contact">
                        <label for="P2_contact">Contact:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $_POST["P2_contact"]?>
                    </div>
                    <br>
                    <br>
                    <div class="Second_parent_address">
                        <label for="P2_address">Address:</label>
                        <?php echo $_POST["P2_address"]?>
                    </div>
                </fieldset>
            </fieldset>

            <fieldset class="SI">
                <legend>Sibling Information</legend>
                <label>Are any siblings currently attending this school?</label>
                <?php echo $_POST["siblings"]?>
                <br>
                <br>
                <fieldset>
                    <legend>Sibling 1</legend>
                    <div class="Sib1_name">
                        <label for="S1_Name">Name:</label>
                        <?php echo $_POST["S1_Name"]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="Sib1_class">
                        <label for="S1_Class">Class:</label>
                        <?php echo $_POST["S1_Class"]?>
                    </div>
                </fieldset>
                <br>
                    <fieldset>
                        <legend>Sibling 2</legend>
                        <div class="Sib2_name">
                            <label for="S2_Name">Name:</label>
                            <?php echo $_POST["S2_Name"]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="Sib2_class">
                            <label for="S2_Class">Class:</label>
                            <?php echo $_POST["S2_Class"]?>
                        </div>
                    </fieldset>
                <br>
                    <fieldset>
                        <div class="Sib3_name">
                        <legend>Sibling 3</legend>
                            <label for="S3_Name">Name:</label>
                            <?php echo $_POST["S3_Name"]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="Sib3_class">
                            <label for="S3_Class">Class:</label>
                            <?php echo $_POST["S3_Class"]?>
                        </div>
                    </fieldset>
                <br>
                    <fieldset>
                        <legend>Sibling 4</legend>
                        <div class="Sib4_name">
                            <label for="S4_Name">Name:</label>
                            <?php echo $_POST["S4_Name"]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="Sib4_class">
                            <label for="S4_Class">Class:</label>
                            <?php echo $_POST["S4_Class"]?>
                        </div>
                    </fieldset>
            </fieldset>
            <br>
            <fieldset>
                <legend>Declaration</legend>
                <label>I </label>
                <?php echo $_POST["parent_name"]?>
                <label>,</label>
                <?php echo $_POST["relation"]?>
                <label>of</label>
                <?php echo $_POST["child_name"]?>
                <label>hereby declare that the information entered is true and correct.</label>
                <br>
                <br>
                    I acknowledge that:
                    <ul>
                        <li>A declaration of any false information;</li>
                        <li>Failure to provide the documents requested, or</li>
                        <li>Failure to satisfy the stated criteria for acceptance</li>
                    </ul>
                    may disqualify my child from admission to this school.
            </fieldset>
            <br>

            <center><button onclick="window.print()" class="print">Print</button><center>
        </form>
        
        <div class="footer">
            <p>&#169; Darius Ali &nbsp; &nbsp; Student ID: 70059 &nbsp; &nbsp; Email: darius.ali059@we.utt.edu.tt</p>
            <p>Assignment 2 &nbsp; &nbsp; WEBP3001 &nbsp; &nbsp; Web Programming &nbsp; &nbsp; Lecturer: Emile Ramlal</p>
        </div>
    </div>
</body>
</html>