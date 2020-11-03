<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primary School Application Form</title>
    <link rel="stylesheet" type="text/css" href="../css/form_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"></script>

    <script src="../javascript/validateName.js"></script>
    <script src="../javascript/dateFormatter.js"></script>
    <script src="../javascript/validateEmail.js"></script>
    <script src="../javascript/phoneFormatter.js"></script>
    <script src="../javascript/radioValidation.js"></script>
    
</head>
<body>
    <div class="header">
        <img src="../images/TT_Coat_of_Arms.jpg" alt="Trinidad and Tobago Coat of Arms" width="150" height="150" class="center_image_header">
        <h1>Ministry Of Education</h1>
        <h2>Application For Admission Into A Public Primary School</h2>
    </div>
    <div class="row">
        <div class="col-8 col-s-8 menu">
            <table>
                <tr>
                    <td><a href="../php/index.php">Application form Home Page</a></td>
                    <td class="active"><a href="../php/application_form.php">Child Info and School Name</a></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-5 col-s-6">
        <form action="data_print_out.php" method="post" name="childInfo" autocomplete="on" class="childInfo">
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
                <textarea id="School_Name" name="School_Name" rows="1" cols="50" placeholder="California Governmet Primary School" required></textarea>
            </fieldset>
            <br>
            <fieldset class="CI">
                <legend>Child's Information:</legend>
                <br>
                    <fieldset>
                        <legend>Name and Nationality</legend>
                        <label for="Sname">Surname:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" id="Sname" name="Sname" placeholder="John" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="Fname">First Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" id="Fname" name="Fname" placeholder="Smith" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <br>
                        <br>
                        <label for="Oname">Other Name(s):</label>
                        <input type="text" id="Oname" name="Oname" placeholder="Levi"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="Nationality">Nationality:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" id="Nationality" name="Nationality" placeholder="Trinidadian/Tobagonian" required>
                    </fieldset>
                <br>
                    <fieldset>
                        <legend>Date of Birth, Birth Certificate PIN, Sex, Religion</legend>
                        <label for="DOB">Date Of Birth:</label>
                        <input type="date" id="DOB" name="DOB" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="BC_PIN">Birth Certificate PIN:</label>
                        <input type="text" id="BC_PIN" name="BC_PIN" pattern="[0-9]{10}" required>
                        <br>
                        <br>
                        <label>Sex:</label> &nbsp;&nbsp;&nbsp;
                        <label for="Male">Male</label>
                        <input type="radio" id="Male" name="gender" value="Male"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="Female">Female</label>
                        <input type="radio" id="Female" name="gender" value="Female"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="Religion">Religion:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" id="Religion" name="Religion" placeholder="Catholic" required>
                    </fieldset>         
                <br>
                    <fieldset>
                        <legend>Address, Immunisation, Student Permit</legend>
                        <br>
                        <label for="address">Address:</label>
                        <textarea id="address" name="address" rows="1" cols="50" placeholder="24, John St, McBean, Couva" required></textarea> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>Valid Student Permit:</label> &nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="yes">Yes</label>
                        <input type="radio" id="yes" name="student_permit" value="yes"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="no">No</label>
                        <input type="radio" id="no" name="student_permit" value="no">
                        <br>
                        <br>
                        <label>Is your child's immunisation up to date?</label>&nbsp;
                        <label for="Yes">Yes</label>
                        <input type="radio" id="Yes" name="immunisation" value="Yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="No">No</label>
                        <input type="radio" id="No" name="immunisation" value="No">
                    </fieldset>          
            </fieldset>

            <fieldset class="PGI">
                <legend>Family Information</legend>
                <br>
                <fieldset>
                    <legend>Parent 1 / Guardian 1</legend>
                    <label for="P1_name">Name:</label>
                    <input type="text" id="P1_name" name="P1_name" placeholder="John Petter Doe" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="P1_Relation">Relation to applicant:</label>
                    <input type="text" id="P1_Relation" name="P1_Relation" placeholder="Mother/Father/etc." required>
                    <br>
                    <br>
                    <label for="P1_email">Email:</label>
                    <input type="email" id="P1_email" name="P1_email" placeholder="John.Doe@gmail.com" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="P1_contact">Contact:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="P1_contact" name="P1_contact" placeholder="1-868-111-1111" required>
                    <br>
                    <br>
                    <label for="P1_address">Address:</label>
                    <textarea id="P1_address" name="P1_address" rows="1" cols="50" placeholder="24, John St, McBean, Couva" required></textarea>
                </fieldset>
                <br>
                <fieldset>
                    <legend>Parent 2 / Guardian 2</legend>
                    <label for="P2_name">Name:</label>
                    <input type="text" id="P2_name" name="P2_name" placeholder="Jane Mary Doe">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="P2_Relation">Relation to applicant:</label>
                    <input type="text" id="P2_Relation" name="P2_Relation" placeholder="Mother/Father/etc.">
                    <br>
                    <br>
                    <label for="P2_email">Email:</label>
                    <input type="email" id="P2_email" name="P2_email" placeholder="Jane.Doe@gmail.com">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="P2_contact">Contact:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="tel" id="P2_contact" name="P2_contact" placeholder="1-868-111-1111">
                    <br>
                    <br>
                    <label for="P2_address">Address:</label>
                    <textarea id="P2_address" name="P2_address" rows="1" cols="50" placeholder="24, John St, McBean, Couva"></textarea>
                </fieldset>
            </fieldset>

            <fieldset class="SI">
                <legend>Sibling Information</legend>
                <label>Are any siblings currently attending this school?</label>
                <label for="S_Yes">Yes</label>
                <input type="radio" id="S_Yes" name="siblings" value="Yes">
                <label for="S_No">No</label>
                <input type="radio" id="S_No" name="siblings" value="No">
                <br>
                <br>
                <fieldset>
                    <legend>Sibling 1</legend>
                    <label for="S1_Name">Name:</label>
                    <input type="text" id="S1_Name" name="S1_Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="S1_Class">Class:</label>
                    <input type="text" id="S1_Class" name="S1_Class">
                </fieldset>
                <br>
                    <fieldset>
                        <legend>Sibling 2</legend>
                        <label for="S2_Name">Name:</label>
                        <input type="text" id="S2_Name" name="S2_Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="S2_Class">Class:</label>
                        <input type="text" id="S2_Class" name="S2_Class">
                    </fieldset>
                <br>
                    <fieldset>
                        <legend>Sibling 3</legend>
                        <label for="S3_Name">Name:</label>
                        <input type="text" id="S3_Name" name="S3_Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="S3_Class">Class:</label>
                        <input type="text" id="S3_Class" name="S3_Class">
                    </fieldset>
                <br>
                    <fieldset>
                        <legend>Sibling 4</legend>
                        <label for="S4_Name">Name:</label>
                        <input type="text" id="S4_Name" name="S4_Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="S4_Class">Class:</label>
                        <input type="text" id="S4_Class" name="S4_Class">
                    </fieldset>
            </fieldset>
            <br>
            <fieldset>
                <legend>Declaration</legend>
                <label>I </label>
                <input type="text" id="parent_name" name="parent_name" placeholder="Parent/Guardian full name" required>
                <label>,</label>
                <input type="text" id="relation" name="relation" placeholder="Relation to child" required>  
                <label>of</label>
                <input type="text" id="child_name" name="child_name" placeholder="Name of child" required>
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
            <input type="submit" value="Submit" class="submit" onclick="return validateTextInput(); genderRadioValidation(); immunisationRadioValidation(); validateParentInput(); validateEmail(); siblingRadioValidation(); validateParentInput_Sibling_Page()">&nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset" class="reset">&nbsp;&nbsp;&nbsp;
            <button class="previous"><a href="../php/index.php">Previous</a></button>&nbsp;&nbsp;&nbsp;
            <button onclick="window.print()" class="print">Print</button>
        </form>
        
        <div class="footer">
            <p>&#169; Darius Ali &nbsp; &nbsp; Student ID: 70059 &nbsp; &nbsp; Email: darius.ali059@we.utt.edu.tt</p>
            <p>Assignment 2 &nbsp; &nbsp; WEBP3001 &nbsp; &nbsp; Web Programming &nbsp; &nbsp; Lecturer: Emile Ramlal</p>
        </div>
    </div>
</body>
</html>