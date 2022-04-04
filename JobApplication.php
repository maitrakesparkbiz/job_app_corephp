
<html>
  <head>
    <title>Job Application Form</title>
    <style>
      fieldset{
        background-color: #c1b9a3;
      }
      body
      {
        background-color: #cccccc;
      }
      h1
      {
        text-align: center;
font-family: Cursive;
font-size: xxx-large;
font-weight: bolder;
      }
      div{
      display: none;  
      }
    </style>
  </head>

  <body onload="country()">
    <h1 style="text-align: center">Job Application Form</h1>
    <form action="../job_app/include/insert.php" method="post" onsubmit="return submit_form()">
      <div id="basic">
    <fieldset>
        <legend><b>Basic Details</b></legend>
        <button type="button" onclick="basic_next()">NEXT </button>
        <table cellspacing="10" align="center">
          <tr>
            <td>
              <label for="fisrtname">First Name:</label>
            </td>
            <td>
              <input type="text" name="firstname" id="firstname"  />
              <p style="color: red;" id="firstname_error"></p>
            </td>

            <td>
              <label for="lastname">Last Name:</label>
            </td>
            <td>
              <input type="text" name="lastname" id="lastname"  />
              <p style="color: red;" id="lastname_error"></p>
            </td>
          </tr>

          <tr>
            <td>
              <label for="designation">Designation:</label>
            </td>
            <td>
              <input type="text" name="designation" id="designation"  />
              <p style="color: red;" id="designation_error"></p>
            </td>

            <td>
              <label for="addr1">Address Line 1:</label>
            </td>
            <td>
              <input type="text" name="addr1" id="addr1"  />
              <p style="color: red;" id="addr1_error"></p>
            </td>
          </tr>

          <tr>
            <td>
              <label for="email">Email:</label>
            </td>
            <td>
              <input type="text" name="email" id="email"  />
              <p style="color: red;" id="eamil_error"></p>
            </td>

            <td>
              <label for="addr2">Address Line 2:</label>
            </td>
            <td>
              <input type="text" name="addr2" id="addr2"  />
              <p style="color: red;" id="addr2_error"></p>
            </td>
          </tr>

          <tr>
            <td>
              <label for="phone">Phone Number:</label>
            </td>
            <td>
              <input type="text" name="phone" id="phone"  />
              <p style="color: red;" id="phone_error"></p>
            </td>


            <td>
              <label for="zip">Zip Code: </label>
            </td>
            <td>
              <input type="text" name="zip" id="zip"  />
              <p style="color: red;" id="zip_error"></p>
            </td>
          </tr>

          <tr>
            <td rowspan="2">
              <label for="gender">Gender:</label>
            </td>
            <td rowspan="2">
              <input type="radio" id="gender" name="gender" checked value="male" /> Male
              <input type="radio" id="gender" name="gender" value="female" /> Female
              <p style="color: red;" id="gender_error"></p>
            </td>


            <td>
              <label for="county">County: </label>
            </td>
            <td>
              <select name="country" id="country"  onchange="view_state()">
              <option value="selected" selected disabled>Select</option>
              </select>
              <p style="color: red;" id="country_error"></p>
              
            </td>
          </tr>

          <tr>
            <td>
              <label for="state">State: </label>
            </td>
            <td>
              <select name="state" id="state" onchange="view_city()">
                <option value="selected" selected disabled>Select</option>
                
              </select>
              <p style="color: red;" id="state_error"></p>
            </td>
          </tr>

          <tr>
            <td>
              <label for="materialStatus">Material status:</label>
            </td>
            <td>
              <select name="materialStatus" id="materialStatus">
                <option value="select" selected disabled>Select</option>
                <option value="single">Single</option>
                <option value="married">Maried</option>
              </select>
              <p style="color: red;" id="status_error"></p>

            </td>
            <td>
              <label for="City">City: </label>
            </td>
            <td>
              <select name="city" id="city">
              <option value="select" selected disabled>Select</option>
               
              </select>
              <p style="color: red;" id="city_error"></p>
              
            </td>

          </tr>
          <tr>
          <td>
              <label for="dob">Date of Birth:</label>
            </td>
            <td>
              <input type="date" name="dob" id="dob"  />
              <p style="color: red;" id="dob_error"></p>

            </td>
          </tr>
        </table>
      </fieldset>
    </div>
      <br /><br />
      <div id="education">
      <fieldset>
        <legend><b>Education Details</b></legend>
        <table cellspacing="10" id="eductaionTable" align="center">
        <button type="button" onclick="basic_back()">BACK </button>   
          <button type="button" onclick="edu_next()">NEXT </button>
          <tr id="edu1">
            <td>
              <label for="courseName1">Course: </label>
              <select name="edu[0][courseName]" id="edu[0][courseName]">
                <option value="select" selected disabled>Select</option>
                <?php
                      include('../job_app/connection/connect.php');
                      // echo "<script>alert('done')</script>";
                      

                      $sql='SELECT id,name FROM `option_master` WHERE s_id=1';
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                          echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                        
                        }
                      }
                    ?>

              </select>
              <p style="color: red;" id="course_error0"></p>
              
            </td>

            <td>
              <label for="universityName1">University:</label>
              <input type="text" name="edu[0][universityName]" id="edu[0][universityName]"  />
              <p style="color: red;" id="uniname_error0"></p>
              
            </td>

            <td>
              <label for="passingYear1">Passing Year: </label>
              <input type="text" name="edu[0][passingYear]" id="edu[0][passingYear]"  />
              <p style="color: red;" id="year_error0"></p>
              
            </td>

            <td>
              <label for="percentage1">Percentage: </label>
              <input type="text" name="edu[0][percentage]" id="edu[0][percentage]"  />
              <p style="color: red;" id="percentage_error0"></p>
              
            </td>

            <!-- remove button -->
            <td colspan="2">
              <input
                type="button"
                value="-"
                name="removeRow1"
                id="removeRow1"
                onclick="onRemoveRow('edu1')"
              />
            </td>
          </tr>
        </table>

        <!-- add button -->
        <table cellspacing="10" align="right">
          <tr>
            <td>
              <input
                type="button"
                value="Add Row"
                name="addRow"
                id="addRow"
                onclick="onAddEduRow()"
              />
            </td>
          </tr>
        </table>
      </fieldset>
      </div>
      <br /><br />
      <div id="work">
      <fieldset>
        <legend><b>Work Experience</b></legend>
        <button type="button" onclick="edu_back()">BACK </button>   
        <button type="button" onclick="work_next()">NEXT </button>
        <table id="workExTable" cellspacing="10" align="center">
          <tr id="wx1">
            <td>
              <label for="companyName1">Comapny Name:</label>
              <input type="text" name="work[0][companyName]" id="work[0][companyName]"  />
              <p style="color: red;" id="company_error0"></p>
              
            </td>

            <td>
              <label for="designation1">Designation:</label>
              <input type="text" name="work[0][designation]" id="work[0][designation]"  />
              <p style="color: red;" id="designation_error0"></p>
              
            </td>

            <td>
              <label for="from1">From:</label>
              <input type="date" name="work[0][from]" id="work[0][from]"  />
              <p style="color: red;" id="from_error0"></p>
              
            </td>

            <td>
              <label for="to1">To:</label>
              <input type="date" name="work[0][to]" id="work[0][to]"  />
              <p style="color: red;" id="to_error0"></p>
              
            </td>

            <!-- remove button -->
            <td colspan="2">
              <input
                type="button"
                value="-"
                name="removeRow1"
                id="removeRow1"
                onclick="onRemoveRow('wx1')"
              />
            </td>
          </tr>
        </table>

        <!-- add button -->
        <table cellspacing="10" align="right">
          <tr>
            <td>
              <input
                type="button"
                value="Add Row"
                name="addRow"
                id="addRow"
                onclick="onAddwxRow()"
              />
            </td>
          </tr>
        </table>
      </fieldset>
      </div>
      <br /><br />
      <div id="combo">
      <table align="center">
  
        <tr>
          <td>
            <fieldset>
              <legend><b>Language Known</b></legend>
              <button type="button" onclick="work_back()">BACK </button>   
              <button type="button" onclick="reff_next()">NEXT </button>
        
              <table id="lanTable" cellspacing="10" align="center">
                <tr id="lan1">
                  <td>
                    <select name="lang[0][language]" id="lang[0][language]">
                      <option value="lan_select" selected disabled>
                        Select
                      </option>
                      <?php
                      include('../job_app/connection/connect.php');
                      // echo "<script>alert('done')</script>";
                      

                      $sql='SELECT id,name FROM select_master WHERE id=2 or id=3 or id=4';
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                          echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                        
                        }
                      }
                    ?>
                    </select>
                      <p style="color: red;" id="language_error0"></p>
                    
                  </td>

                  <td>
                    <input type="checkbox" name="lang[0][read]"  id="lang[0][read]" value="read"/>Read
                    <input type="checkbox" name="lang[0][write]"  id="lang[0][write]" value="Write" />Write
                    <input type="checkbox" name="lang[0][speak]"  id="lang[0][speak]" value="Speak"/>Speak
                    <p style="color: red;" id="known_error0"></p>
                      
                  </td>

                  <!-- remove button -->
                  <td colspan="2">
                    <input
                      type="button"
                      value="-"
                      name="removeRow1"
                      id="removeRow1"
                      onclick="onRemoveRow('lan1')"
                    />
                  </td>
                </tr>
              </table>

              <!-- add button -->
              <table cellspacing="10" align="right">
                <tr>
                  <td>
                    <input
                      type="button"
                      value="Add Row"
                      name="addRow"
                      id="addRow"
                      onclick="onAddLanRow()"
                    />
                  </td>
                </tr>
              </table>
            </fieldset>
          </td>

          <td>
            <fieldset>
              <legend><b>Technology Known</b></legend>
              <table cellspacing="10" align="center" id="techTable">
                <tr id="tech1">
                  <td>
                    <select name="tech[0][technology]" id="tech[0][technology]">
                      <option value="select1" selected disabled>Select</option>
                      <?php
                      include('../job_app/connection/connect.php');
                      // echo "<script>alert('done')</script>";
                      

                      $sql='SELECT id,name FROM `option_master` WHERE s_id =5;';
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                          echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                        
                        }
                      }
                    ?>

                    </select>
                  </td>

                  <td>
                    <input type="radio" name="tech[0][status]" id="tech[0][status]" value="beginner"> Beginer
                  <input type="radio" name="tech[0][status]" id="tech[0][status]" value="mediocre"> Mediocre
                  <input type="radio" name="tech[0][status]" id="tech[0][status]" value="expert"> Expert
                </td>

                  <!-- remove button -->
                  <td colspan="2">
                    <input
                      type="button"
                      value="-"
                      name="removeRow1"
                      id="removeRow1"
                      onclick="onRemoveRow('tech1')"
                    />
                  </td>
                </tr>
              </table>

              <!-- add button -->
              <table cellspacing="10" align="right">
                <tr>
                  <td>
                    <input
                      type="button"
                      value="Add Row"
                      name="addRow"
                      id="addRow"
                      onclick="onAddTechRow()"
                    />
                  </td>
                </tr>
              </table>
            </fieldset>
          </td>
        </tr>
        
      </table>
      </div>
      <br /><br />
      <div id="reff">
      <fieldset>
        <legend><b>Refeneces</b></legend>
        <button type="button" onclick="reff_back()">BACK </button>   
        <button type="button" onclick="pref_next()">NEXT </button>
        
        <table cellspacing="10" id="refTable" align="center">
          <tr id="ref1">
            <td>
              <label for="refName">Name:</label>
              <input type="text" name="ref[0][refName]" id="ref[0][refName]"  />
              <p style="color: red;" id="refname0"></p>
              
            </td>

            <td>
              <label for="refcontact">Contact Number:</label>
              <input type="tel" name="ref[0][refContact]" id="ref[0][refContact]"  />
              <p style="color: red;" id="refcontact0"></p>
              
            </td>

            <td>
              <label for="refRelation">Relation:</label>
              <input type="text" name="ref[0][refRelation]" id="ref[0][refRelation]"  />
              <p style="color: red;" id="refrealtion0"></p>
              
            </td>

            <!-- remove button -->
            <td colspan="2">
              <input
                type="button"
                value="-"
                name="removeRow1"
                id="removeRow1"
                onclick="onRemoveRow('ref1')"
              />
            </td>
          </tr>
        </table>

        <!-- add row button -->
        <table cellspacing="10" align="right">
          <tr>
            <td>
              <input
                type="button"
                value="Add Row"
                name="addRow"
                id="addRow"
                onclick="onAddRefRow()"
              />
            </td>
          </tr>
        </table>
      </fieldset>
      </div>
      <br /><br />
      <div id="location">
      <fieldset>
        <legend><b>Preference</b></legend>
        <button type="button" onclick="pref_back()">BACK </button>   
               
        <table cellspacing="10" align="center">
          <tr>
            <td rowspan="4">
              <label for="location">Prefered Location:</label>
            </td>

            <td rowspan="4">
              <select name="location[]" id="location" multiple  >
                <option value="select" selected disabled>Select</option>
                <?php
                      include('../job_app/connection/connect.php');
                      // echo "<script>alert('done')</script>";
                      

                      $sql='SELECT id,name FROM `option_master` WHERE s_id=6; ';
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                          echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                        
                        }
                      }
                    ?>

              </select>
              <p style="color: red;" id="location"></p>

            </td>

            <td>
              <label for="noticePeriod">Notice Period:</label>
            </td>

            <td>
              <input
                type="text"
                name="noticePeriod"
                id="noticePeriod"
                placeholder="in Months"
              />
              <p style="color: red;" id="notice_error"></p>

            </td>

            <td rowspan="4">
              <label for="department">Department:</label>
            </td>

            <td rowspan="4">
              <select name="department" id="department"  >
                <option value="select" selected disabled>Select</option>
                <option value="ba">BA</option>
                <option value="bde">BDE</option>
                <option value="dev">Development</option>
                <option value="hr">HR</option>
                <option value="marketing">Marketing</option>
              </select>
              <p style="color: red;" id="dept_error"></p>

            </td>
          </tr>

          <tr>
            <td>
              <label for="currentCTC">Current CTC:</label>
            </td>

            <td>
              <input type="text" name="currentCTC" id="currentCTC"  />
              <p style="color: red;" id="currect_error"></p>
              
            </td>
          </tr>

          <tr>
            <td>
              <label for="expectedCTC">Expected CTC:</label>
            </td>

            <td>
              <input type="text" name="expectedCTC" id="expectedCTC"  />
              <p style="color: red;" id="expected_error"></p>
              
            </td>
          </tr>

          <tr>
            <td>
              <label for="resume">Upload Resume:</label>
            </td>

            <td>
              <input type="file" name="resume" id="resume"  />
            </td>
          </tr>
        </table>
      </fieldset>
      <br /><br />
      </div>

      <table cellspacing="10" align="center">
        <tr>
          <td>
            <input type="submit" name="submit" id="" value="submit" />
          </td>
        </tr>
      </table>
    </form>

    <script src="../job_app/script/location.js">

      var basic = document.getElementById("basic");
      var education = document.getElementById("education");
      var work = document.getElementById("work");
      var combo = document.getElementById("combo");
      var reff = document.getElementById("reff");
      var location = document.getElementById("location");
      
      var check = document.getElementById("check");
      
      
      // Get the button that opens the modal

 
      
      
      // Get the <span> element that closes the modal
      var span = document.getElementById("span");
      
      // When the user clicks the button, open the modal 
      
      basic.style.display = "block";
      education.style.display = "none";
      work.style.display = "none";
      combo.style.display = "none";
      reff.style.display = "none";
      location.style.display = "none";

      
      
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
        modal1.style.display = "block";
      }
      
      next.onclick = function() {
        modal1.style.display = "none";
        modal2.style.display = "block";
      }
      
      next_3.onclick = function() {
        modal2.style.display = "none";
        modal3.style.display = "block";
      }
      next_4.onclick = function() {
        modal3.style.display = "none";
        modal4.style.display = "block";
      }
      next_5.onclick = function() {
        modal4.style.display = "none";
        modal5.style.display = "block";
      }
      function back1() {
        modal2.style.display = "none";
        modal1.style.display = "block";
      }
      
      
      function back2() {
        modal3.style.display = "none";
        modal2.style.display = "block";
      }
      
      function back3() {
        modal4.style.display = "none";
        modal3.style.display = "block";
      }
      
      function next_6() {
        modal5.style.display = "none";
        modal4.style.display = "block";
      }
      
      function basic()
      {    
        document.getElementById("besic_update").innerHTML=''
      
        document.getElementById("besic_update").innerHTML='<input type="hidden" name="basic_update" id="basic_update" value="true">'
        modal1.style.display = "none";
          modal.style.display = "block";
      
      
          
        
      }
      
      
      
      // When the user clicks anywhere outside of the modal, close it
      
      
      
            // education table
           // let edu_counter = 2;
            function onAddEduRow() {
              let table = document.getElementById("eductaionTable");
              var edu_counter = document.getElementById('eductaionTable').getElementsByTagName('tr').length;
              console.log(edu_counter)
              let row = table.insertRow();
              row.id = "edu" + edu_counter;
      
              let cell1 = row.insertCell();
              let cell2 = row.insertCell();
              let cell3 = row.insertCell();
              let cell4 = row.insertCell();
              let cell5 = row.insertCell();
      
              cell1.innerHTML =
                "<label for='courseName" +
                edu_counter +
                "'>Course: </label> <select name=edu["+edu_counter+"][courseName] id='edu["+edu_counter+"][courseName]'>" +
                "<option value='select' selected disabled>Select</option> <option value='ssc'>SSC</option> <option value='hsc'>HSC</option> <option value='bachelor'>Bachelors</option> <option value='master'>Masters</option> </select > ";
              cell2.innerHTML =
                "<label for='universityName" +
                edu_counter +
                "'>University</label>" +
                "<input type='text' name=edu["+edu_counter+"][universityName]  id='edu["+edu_counter+"][universityName]'>";
              cell3.innerHTML =
                "<label for='passingYear" +
                edu_counter +
                "'>Passing Year: </label>" +
                "<input type='text' name=edu["+edu_counter+"][passingYear]  id='edu["+edu_counter+"][passingYear]'>";
              cell4.innerHTML =
                "<label for='percentage" +
                edu_counter +
                "'>Percentage: </label>" +
                "<input type='text' name=edu["+edu_counter+"][percentage]  id='edu["+edu_counter+"][percentage]'>";
              cell5.innerHTML =
                "<input type='button' value='-' name='removeRow" +
                edu_counter +
                "' id='removeRow" +
                edu_counter +
                "' onclick=onRemoveRow('edu" +
                edu_counter +
                "')>";
      
              edu_counter = edu_counter + 1;
            }
      
            // work experience table
           // let wx_counter = 2;
            function onAddwxRow() {
              let table = document.getElementById("workExTable");
              var wx_counter = document.getElementById('workExTable').getElementsByTagName('tr').length;
              let row = table.insertRow();
              row.id = "wx" + wx_counter;
      
              let cell1 = row.insertCell();
              let cell2 = row.insertCell();
              let cell3 = row.insertCell();
              let cell4 = row.insertCell();
              let cell5 = row.insertCell();
      
      
                cell1.innerHTML =
                "<label for='designation" +
                wx_counter +
                "'>Comapny Name:</label> <input type='text' name='work["+wx_counter+"][companyName]' id='work["+wx_counter+"][companyName]"+"'>";
              cell2.innerHTML =
                "<label for='designation" +
                wx_counter +
                "'>Designation:</label> <input type='text' name='work["+wx_counter+"][designation]' id='work["+wx_counter+"][designation]"+"'>";
              cell3.innerHTML =
                "<label for='from" +
      "'>From:</label> <input type='date' name='work["+wx_counter+"][from]' id='work["+wx_counter+"][from]"+"'>";
              cell4.innerHTML =
                "<label for='to" +
                wx_counter +
                "'>To:</label> <input type='date' name='work["+wx_counter+"][to]' id='work["+wx_counter+"][to]" +"'>";
              cell5.innerHTML =
                "<input type='button' value='-' name='removeRow" +
                wx_counter +
                "' id='removeRow" +
                wx_counter +
                "' onclick=onRemoveRow('wx" +
                wx_counter +
                "')>";
      
              wx_counter = wx_counter + 1;
            }
      
            // reference table
          //  let ref_counter = 2;
            function onAddRefRow() {
              let table = document.getElementById("refTable");
              var ref_counter = document.getElementById('refTable').getElementsByTagName('tr').length;
              let row = table.insertRow();
              row.id = "ref" + ref_counter;
      
              let cell1 = row.insertCell();
              let cell2 = row.insertCell();
              let cell3 = row.insertCell();
              let cell4 = row.insertCell();
      
              cell1.innerHTML =
                "<label for='refName" +
                ref_counter +
                "'>Name:</label> <input type='text' name='ref["+ref_counter+"][refName]' id='ref["+ref_counter+"][refName]'>";
              cell2.innerHTML =
                "<label for='refcontact" +
                ref_counter +
                "'>Contact Number:</label> <input type='tel' name='ref["+ref_counter+"][refContact]' id='ref["+ref_counter+"][refContact]'>";
              cell3.innerHTML =
                "<label for='refRelation" +
                ref_counter +
                "'>Relation:</label> <input type='text' name='ref["+ref_counter+"][refRelation]' id='ref["+ref_counter+"][refRelation]'>";
              cell4.innerHTML =
                "<td colspan='2'> <input type='button' value='-'' name='removeRow" +
                ref_counter +
                "' id='removeRow" +
                ref_counter +
                "' onclick=onRemoveRow('ref" +
                ref_counter +
                "')> </td>";
      
              ref_counter = ref_counter + 1;
            }
      
            // language table
           // let lan_counter = 2;
            function onAddLanRow() {
              let table = document.getElementById("lanTable");
              var lan_counter = document.getElementById('lanTable').getElementsByTagName('tr').length;
              let row = table.insertRow();
              row.id = "lan" + lan_counter;
      
              let cell1 = row.insertCell();
              let cell2 = row.insertCell();
              let cell3 = row.insertCell();
      
              cell1.innerHTML =
                "<select name='lang["+lan_counter+"][language]' id='lang["+lan_counter+"][language]'>" +
                "<option value='lan_select'" +
                "selected disabled>Select</option>" +
                "<option value='english'" +
                ">English</option>" +
                "<option value='hindi'" +
                ">Hindi</option>" +
                "<option value='gujarati'" +
                ">Gujarati</option>" +
                "</select>";
              cell2.innerHTML =
                "<input type='checkbox'  name='lang["+lan_counter+"][read]'  id='lang["+lan_counter+"][read]'  value='read' >Read " +
                "<input type='checkbox' name='lang["+lan_counter+"][write]'  id='lang["+lan_counter+"][write]''   value='write' >Write " +
                "<input type = 'checkbox' name = 'lang["+lan_counter+"][speak]' id='lang["+lan_counter+"][speak]' value='speak' >Speak ";
              cell3.innerHTML =
                "<input type='button' value='-' name='removeRow" +
                lan_counter +
                "' id='removeRow" +
                lan_counter +
                "' onclick=onRemoveRow('lan" +
                lan_counter +
                "')>";
      
              lan_counter = lan_counter + 1;
            }
      
            // Technology Table
           // let tech_counter = 2;
            function onAddTechRow() {
              let table = document.getElementById("techTable");
              var tech_counter = document.getElementById('techTable').getElementsByTagName('tr').length;
              let row = table.insertRow();
              row.id = "tech" + tech_counter;
      
              let cell1 = row.insertCell();
              let cell2 = row.insertCell();
              let cell3 = row.insertCell();
      
              cell1.innerHTML =
                "<select name='tech["+tech_counter+"][technology]' id='tech["+tech_counter+"][technology]'>" +
                "<option value='select" +
                tech_counter +
                "' selected disabled>Select</option>" +
                " <option value='javascript'>JavaScript</option>" +
                "<option value='php'>PHP</option>" +
                " <option value='nodejs'>NodeJS</option>" +
                "<option value='Python'>Python</option>" +
                "</select>";
              cell2.innerHTML =
                "<input type='radio' name='tech["+tech_counter+"][status]'    id=tech["+tech_counter+"][status] value='beginer' /> Beginer" +
                "<input type='radio' name='tech["+tech_counter+"][status]'  id=tech["+tech_counter+"][status] value='mediocre'/> Mediocre" +
                "<input type='radio' name='tech["+tech_counter+"][status]'  id=tech["+tech_counter+"][status]  value='expert' /> Expert";
              cell3.innerHTML =
                "<input type='button' value= '-' name='removeRow" +
                tech_counter +
                "'  id='removeRow" +
                tech_counter +
                "' onclick=onRemoveRow('tech" +
                tech_counter +
                "') />";
      
              tech_counter = tech_counter + 1;
            }
      
            function onRemoveRow(rowid) {
              if (confirm("Are you sure you want to delete record?") == true) {
                let row = document.getElementById(rowid);
                row.parentNode.removeChild(row);
              }
            }
 /*            function submit_form()
            {
              
              var fname =document.getElementById("firstname").value;
              
              var lname =document.getElementById("lastname").value;
              var designation = document.getElementById("designation").value;
              var email = document.getElementById("email").value;
              var city = document.getElementById("city").value;
              var zip = document.getElementById("zip").value;
              var addr1 =document.getElementById("addr1").value;
              var addr2 =document.getElementById("addr2").value;
              var current_CTC= document.getElementById("currentCTC").value
              var expected_CTC= document.getElementById("expectedCTC").value
              var notice_Period=document.getElementById("noticePeriod").value
              var cv=document.getElementById("resume").value
              var rows_count = document.getElementById('eductaionTable').getElementsByTagName('tr');
              var rows_count1 = document.getElementById('workExTable').getElementsByTagName('tr');
              var rows_count2 = document.getElementById('refTable').getElementsByTagName('tr');
              var rows_count3 = document.getElementById('lanTable').getElementsByTagName('tr');
              var rows_count4 = document.getElementById('techTable').getElementsByTagName('tr');
          
              
              
      
              var nameptr = /^[a-zA-Z\s]*$/;
              
              var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
              var zipptr = /^[1-9]{1}[0-9]{5}$/
              var addr = /^[a-zA-Z\s1-9]{0,200}$/
              var uniptr = /^[a-zA-Z\s]*$/;
              var uniyearptr = /^[1-9]{1}[0-9]{3}$/;
              var uniperptr = /^[0-9]{2}[.][0-9]{2}$/;
              var dateptr=/^[1-9]{4}[-][0-9]{2}[-][0-9]{2}$/;
              var contact=/^[+]{1}[0-9]*$/;
              var ctc = /^[0-9a-zA-Z.\s]*$/;
              var noticeptr=/^[0-9\s]*$/;
              var cvptr = /[pdf]$/;
              var desptr = /^[a-zA-Z\s1-9]*$/;
      
              console.log(fname.match(nameptr))

              if(!lname.match(nameptr))
              {
                alert("last false");
                 
      
              }
              if(!designation.match(desptr))
              {
                alert("des false");
                 
      
              }
              
              if(!email.match(emailformat))
              {
              alert("email false");
               
      
              }
              if(!city.match(desptr))
              {
                alert("city false");
                 
      
              }
              if(!zip.match(zipptr))
              {
                alert("zip false");
                 
      
              }
              if(!addr1.match(addr))
              {
                alert("addr1 false");
                 
      
              }
              if(!addr2.match(addr))
              {
                alert("addr2 false");
                 
      
              }
              
      
              for(i=1;i<=rows_count.length;i++)
              {
                var str="universityName"+i;
                var str1="passingYear"+i;
                var str2="percentage"+i;
                var uni =document.getElementById(str).value;
                var uniyear =document.getElementById(str1).value;
                var uniper =document.getElementById(str2).value;
                
                if(!uni.match(uniptr))
                {
                  alert("false uni")
                   
      
                }
                
                if(!uniyear.match(uniyearptr))
                {
                  alert("false uni year")
                   
      
                }
                if(!uniper.match(uniperptr))
                {
                  alert("false uni per")
                   
      
                }
      
              }
              for(i=1;i<=rows_count1.length;i++)
              {
                var str="to"+i;
                var str1="from"+i;
                var str2="companyName"+i
                var str3="designation"+i
                var todate=document.getElementById(str).value;
                var fromdate=document.getElementById(str1).value;
                var compname=document.getElementById(str2).value;
                var desname=document.getElementById(str3).value;
                
      
                if(!compname.match(desptr) ||  compname=="")
                {
                  alert("company false")
                   
      
                }
                if(!desname.match(desptr) ||  desname=="")
                {
                  alert("des false")
                   
      
                }
                if( todate!="")
                {
                  todate =new Date(todate);
                
                  if(!todate.match(dateptr) )
                  {
                    alert("to date false")
                     
      
                  }
                }
                else
                {
                  alert("to date false")
                   
      
                }
      
                if( fromdate!="")
                {
                  fromdate =new Date(fromdate);
                
                  if(!fromdate.match(dateptr) )
                  {
                    alert("from date false")
                     
      
                  }
                }
                else
                {
                  alert("from date false")
                   
      
                }
              }
      
              for(i=1;i<=rows_count2.length;i++)
              {
                var str="refName"+i;
                var str1="refContact"+i;
                var str2="refRelation"+i;
                var name =document.getElementById(str).value;
                var refcontact =document.getElementById(str1).value;
                var relation =document.getElementById(str2).value;
                
                if(!name.match(nameptr) || name=="")
                {
                  alert("ref name false")
                   
      
                }
                
                if(!refcontact.match(contact) || refcontact=="")
                {
                  alert("false ref contect")
                   
      
                }
                if(!relation.match(desptr)|| relation=="")
                {
                  alert("false ref relation")
                   
      
                }
      
              }
      
              if(!notice_Period.match(noticeptr) || notice_Period=="")
              {
                alert("false notice period") 
                 
      
              }
              if(!current_CTC.match(ctc) || current_CTC=="")
              {
                alert("false current ctc")
                 
      
              }
      
              if(!expected_CTC.match(ctc) || expected_CTC=="")
              {
                alert("false expected ctc")
                 
      
              }
          for(i=1;i<=rows_count3.length;i++)
              {
            var cnt1=0;
            var cnt2=0;
            var cnt3=0;
                var str="language"+i;
                var str1="read"+i;
                var str2="write"+i;
                var str3="speak"+i;
                var e =document.getElementById(str);
            var optionSelectedText = e.options[e.selectedIndex].value;
                
             var read = document.getElementById(str1);  
            var write = document.getElementById(str2);  
            var speak = document.getElementById(str3);  
            
                
                
                if(optionSelectedText=="lan_select")
                {
                   alert("false lang")
                }
                else
                {
            
                  if (read.checked==false && write.checked==false && speak.checked==false) 
            {
            alert("false checkbox")
            }
            
                 
                }
      
              }
      
              if(!cv.match(cvptr))
              {
                alert("false resume")
                 
      
              }
      
      
            }
       */
      
      
            //----------------------------ajax-------------------------------------------------------------------------
      
      
            function insert_basic() {
              console.log("testing");
              let check=0
              var basic_update=document.getElementById("basic_update").value;
              if(basic_update=="true")
              {
                check=1
                var id=document.getElementById("id").value;
              }
             
              var firstname=document.getElementById("firstname").value;
              var lastname=document.getElementById("lastname").value;
              var designation=document.getElementById("designation").value;
              var addr1=document.getElementById("addr1").value;
              var email=document.getElementById("email").value;
              var addr2=document.getElementById("addr2").value;
              var phone=document.getElementById("phone").value;
              var city=document.getElementById("city").value;
              var gender=document.getElementById("gender").value;
              var zip=document.getElementById("zip").value;
              var state=document.getElementById("state").value;
              var materialStatus=document.getElementById("materialStatus").value;
              var dob=document.getElementById("dob").value;
              if(check==1)
              {
                        var xhttp;
                      xhttp = new XMLHttpRequest();
                      xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                      };
                      xhttp.open("GET", "insert_update?id="+id+"&firstname="+firstname+"&lastname="+lastname+"&designation="+designation+"&addr1="+addr1+"&email="+email+"&addr2="+addr2+"&phone="+phone+"&city="+city+"&gender="+gender+"&zip="+zip+"&state="+state+"&materialStatus="+materialStatus+"&dob="+dob+"", true);
                      xhttp.send();
      
              }
              else
              {
                      var xhttp;
                      xhttp = new XMLHttpRequest();
                      xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                      };
                      xhttp.open("GET", "insert_basic?firstname="+firstname+"&lastname="+lastname+"&designation="+designation+"&addr1="+addr1+"&email="+email+"&addr2="+addr2+"&phone="+phone+"&city="+city+"&gender="+gender+"&zip="+zip+"&state="+state+"&materialStatus="+materialStatus+"&dob="+dob+"", true);
                      xhttp.send();
             }
              modal.style.display = "none";
        modal1.style.display = "block";
            }
      
            function insert_edu() {
      
              var edu = document.getElementById('eductaionTable').getElementsByTagName('tr').length;
      
      
      
      
              
              for (let i = 0; i < edu; i++) {
      
      
                   
                var id=document.getElementById("id").value;
                console.log("hello");
                edu_str1="edu["+i+"][courseName]"
                edu_str2="edu["+i+"][universityName]"
                edu_str3="edu["+i+"][passingYear]"
                edu_str4="edu["+i+"][percentage]"
              var cname=document.getElementById(edu_str1).value;
              var uniname=document.getElementById(edu_str2).value;
              var year=document.getElementById(edu_str3).value;
              var perc=document.getElementById(edu_str4).value;
       
              var xhttp;
            
              
              xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
               
                }
              };
              xhttp.open("GET", "insert_edu?id="+id+"&cname="+cname+"&uniname="+uniname+"&year="+year+"&perc="+perc+"", true);
              xhttp.send();
            }
              modal1.style.display = "none";
              modal2.style.display = "block";
      
          }
      
      
          function insert_work() {
            
            var work = document.getElementById('workExTable').getElementsByTagName('tr').length;
              console.log(work);
              check=0
              for (let i = 0; i < work; i++) {
               
                console.log("check",check);
                
                str_work1="work["+i+"][companyName]";
                str_work2="work["+i+"][designation]";
                str_work3="work["+i+"][from]";
                str_work4="work["+i+"][to]";
                console.log("works");
                
                var id=document.getElementById("id").value;
                console.log("worksid");
              var workexp=document.getElementById(str_work1).value;
              console.log("worksname");
              var designation=document.getElementById(str_work2).value;
              console.log("worksdesc");
              var from=document.getElementById(str_work3).value;
              console.log("worksfrom");
              var to=document.getElementById(str_work4).value;
              console.log("worksto");
       
              var xhttp;     
              xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
               
                }
              };
              xhttp.open("GET", "insert_work?id="+id+"&work="+workexp+"&designation="+designation+"&from="+from+"&to="+to+"&i="+i+"", true);
              xhttp.send();
              console.log(i);
              check++
            }
              modal2.style.display = "none";
              modal3.style.display = "block";
      
          }
      
      
      function insert_lang() {
        
            
        var lanTable = document.getElementById('lanTable').getElementsByTagName('tr').length;
      
              console.log(lanTable);
              for (let i = 0; i < lanTable; i++) {
                console.log(i);
                str_lang1="lang["+i+"][language]"
               str_lang2="lang["+i+"][read]"
               str_lang3="lang["+i+"][write]"
               str_lang4="lang["+i+"][speak]"
                var id=document.getElementById("id").value;
                console.log("id");
              var lang=document.getElementById(str_lang1).value;
              console.log("lang");
              var read=document.getElementById(str_lang2).checked;
              if(read==true)
              {
                read="read"
              }
              else
              {
                read=""
              }
              console.log("read");
              
              var write=document.getElementById(str_lang3).checked;
              if(write==true)
              {
                write="write"
              }
              else
              {
                write=""
              }
              console.log("write");
              var speak=document.getElementById(str_lang4).checked;
              if(speak==true)
              {
                speak="speak"
              }
              else
              {
                speak=""
              }
              console.log("speak");
              var xhttp;     
              xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
               
                }
              };
              xhttp.open("GET", "insert_lang?id="+id+"&lang="+lang+"&read="+read+"&write="+write+"&speak="+speak+"", true);
              xhttp.send();
              
      
            }
      
            /// tech
                 var techTable = document.getElementById('techTable').getElementsByTagName('tr').length;
      
                console.log(techTable);
                for (let i = 0; i < techTable; i++) {
                  console.log(i);
                  str_tech1="tech["+i+"][technology]"
                  
            
                  var id=document.getElementById("id").value;
                  console.log("id");
                var tech=document.getElementById(str_tech1).value;
                console.log("tech");
               
                
                for (let j = 1; j <=3; j++) {
                  str_tech2="tech["+i+"][status"+j+"]";
                  var status=document.getElementById(str_tech2).checked;
                  if(status==true)
                  {
                    
                    var status_send=document.getElementById(str_tech2).value;
      
      
                  var xhttp;     
                  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
      
                    }
                  };
                  xhttp.open("GET", "insert_tech?id="+id+"&tech="+tech+"&status="+status_send+"", true);
                  xhttp.send();
                  }
                  
                }
      
              
      
            }
      
      
              modal3.style.display = "none";
              modal4.style.display = "block";
      
          }
            
            function insert_reff() {
      
              var refTable = document.getElementById('refTable').getElementsByTagName('tr').length;
              console.log(refTable);
              for (let i = 0; i < refTable; i++) {
               
                str_reff1="ref["+i+"][refName]"
                str_reff2="ref["+i+"][refContact]"
                str_reff3="ref["+i+"][refRelation]"
                
                var id=document.getElementById("id").value;
      
              var name=document.getElementById(str_reff1).value;
      
              var contact=document.getElementById(str_reff2).value;
        
              var relation=document.getElementById(str_reff3).value;
      
       
              var xhttp;     
              xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
               
                }
              };
              xhttp.open("GET", "insert_reff?id="+id+"&name="+name+"&contact="+contact+"&relation="+relation+"", true);
              xhttp.send();
              console.log(i);
      
            }
              modal4.style.display = "none";
              modal5.style.display = "block";
            }
            
      
            function insert_reff_post() {
      
              var refTable = document.getElementById('refTable').getElementsByTagName('tr').length;
              console.log(refTable);
              for (let i = 0; i < refTable; i++) {
              
                str_reff1="ref["+i+"][refName]"
                str_reff2="ref["+i+"][refContact]"
                str_reff3="ref["+i+"][refRelation]"
                let obj_reff={
                  i:i,
                 id:document.getElementById("id").value,
      
               name:document.getElementById(str_reff1).value,
      
               contact:document.getElementById(str_reff2).value,
      
               relation:document.getElementById(str_reff3).value,
                }
      
      let reff=JSON.stringify(obj_reff)
              var xhttp;     
              xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
              
                }
              };
              xhttp.open("POST", "insert_reff_post", true);
              xhttp.setRequestHeader('Content-Type','application/json')
              xhttp.send(reff);
              console.log(i);
      
              }
              modal4.style.display = "none";
              modal5.style.display = "block";
            }
      
      
            async function insert_pref() {
      
              var id=document.getElementById("id").value;
              var location=document.getElementById("location").selectedOptions;
              var noticePeriod=document.getElementById("noticePeriod").value;
              var department=document.getElementById("department").value;
              var currentCTC=document.getElementById("currentCTC").value;
              var expectedCTC=document.getElementById("expectedCTC").value;
              var values = Array.from(location).map(({ value }) => value);
              console.log(values);
              for (let i = 0; i < values.length; i++) {
               
                var xhttp;
              xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                }
              };
              xhttp.open("GET", "insert_pref?id="+id+"&values="+values[i]+"&noticePeriod="+noticePeriod+"&department="+department+"&currentCTC="+currentCTC+"&expectedCTC="+expectedCTC+"", true);
              xhttp.send(); 
              }
      
      
      
      
      
          setTimeout(()=>{
            window.location.href="/getdata"
          },100);
      
      
            }
      
      
      
      
          </script>
    
  </body>
</html>
