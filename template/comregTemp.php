<?php
session_start();
    if (isset($_POST['active'])) {
            $emailverify = $user->find('username',$_SESSION['username'])->fetch();
          if($emailverify['hash_code'] == $_POST['email_code']){
                    $criteria =[
                    'user_id' => $emailverify['user_id'],
                    'firstname' => $_POST['first-name'],
                    'lastname' => $_POST['last-name'],
                    'DOB'=> $_POST['date'],
                    'gender'=> $_POST['genre'],
                    'contact_number'=>$_POST['contact_nmbr'],
                    'address'=> $_POST['address'].','.$_POST['city'].','.$_POST['country'],
                    'status'=>'active'

                  ];
               $updateusers->update($criteria,'user_id');
               echo "<script>alert('Acount Activated!');
               window.location.href='login';</script>";
          }
          else{
            echo "<script>alert('Invalid Verification Code!');</script>";
            }
        }
        else{
    ?>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../css/comreg.css">
  <div class="container">
    <h5 style="font-size: 20px; font-weight: 900">Active Your Account</h5>
  <form id="form-wrapper" class="form-wrapper" name="form" action="" method="POST">
            <div id="progress-bar" class="progress-bar">
                <ul class="progress-bar__container">
                    <li class="progress-bar__item current"><a href="#" class="link">Personal details</a></li>
                    <li class="progress-bar__item"><a href="#" class="link">Contact info</a></li>
                    <li class="progress-bar__item"><a href="#" class="link">Activation</a></li>
                </ul>
            </div>
           
            <div id="fieldset-container" class="tab-wrapper ">

                <fieldset class="tab-panel">
                    <legend>Personal details</legend>
                    <div class="input-group">
                        <input type="text" class="input" name="first-name" id="first-name" > 
                        <label class="label" for="first-name"><i class="lnr lnr-user"></i> First name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class="input" name="last-name" id="last-name" > 
                        <label class="label" for="last-name"><i class="lnr lnr-user"></i> Last name</label>
                    </div>

                    <div class="input-group focus">
                        <input type="date" class="input" name="date" id="date" >
                        <label class="label" for="date"><i class="lnr lnr-calendar-full"></i> Brith date</label>
                    </div>
                    
                    <div class="input-group radio">
                        <input type="radio" class="input" name="genre" id="male" value="male">
                        <label class="label-radio" for="male">Male</label>
                        <input type="radio" class="input" name="genre" id="female" value="female">
                        <label class="label-radio" for="female"> Female</label>
                        
                    </div>

                </fieldset>

                <fieldset class="tab-panel">
                    <legend>Contact info</legend>
                    <div class="input-group">
                        <input type="text" class="input" name="address" id="address" > 
                        <label class="label" for="address"><i class="lnr lnr-map-marker"></i> Street Address</label>
                    </div>

                    <div class="input-group">
                        <input type="text" class="input" name="city" id="city" >
                        <label class="label" for="city">City</label>
                    </div>

                    <div class="input-group select">
                        <select name="country" class="input" id="country" >
                            <option value=""></option>
                            <option value="AFG">Afghanistan</option>
                            <option value="ALA">Åland Islands</option>
                            <option value="ALB">Albania</option>
                            <option value="DZA">Algeria</option>
                            <option value="ASM">American Samoa</option>
                            <option value="AND">Andorra</option>
                            <option value="AGO">Angola</option>
                            <option value="AIA">Anguilla</option>
                            <option value="ATA">Antarctica</option>
                            <option value="ATG">Antigua and Barbuda</option>
                            <option value="ARG">Argentina</option>
                            <option value="ARM">Armenia</option>
                            <option value="ABW">Aruba</option>
                            <option value="AUS">Australia</option>
                            <option value="AUT">Austria</option>
                            <option value="AZE">Azerbaijan</option>
                            <option value="BHS">Bahamas</option>
                            <option value="BHR">Bahrain</option>
                            <option value="BGD">Bangladesh</option>
                            <option value="BRB">Barbados</option>
                            <option value="BLR">Belarus</option>
                            <option value="BEL">Belgium</option>
                            <option value="BLZ">Belize</option>
                            <option value="BEN">Benin</option>
                            <option value="BMU">Bermuda</option>
                            <option value="BTN">Bhutan</option>
                            <option value="BOL">Bolivia, Plurinational State of</option>
                            <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                            <option value="BIH">Bosnia and Herzegovina</option>
                            <option value="BWA">Botswana</option>
                            <option value="BVT">Bouvet Island</option>
                            <option value="BRA">Brazil</option>
                            <option value="IOT">British Indian Ocean Territory</option>
                            <option value="BRN">Brunei Darussalam</option>
                            <option value="BGR">Bulgaria</option>
                            <option value="BFA">Burkina Faso</option>
                            <option value="BDI">Burundi</option>
                            <option value="KHM">Cambodia</option>
                            <option value="CMR">Cameroon</option>
                            <option value="CAN">Canada</option>
                            <option value="CPV">Cape Verde</option>
                            <option value="CYM">Cayman Islands</option>
                            <option value="CAF">Central African Republic</option>
                            <option value="TCD">Chad</option>
                            <option value="CHL">Chile</option>
                            <option value="CHN">China</option>
                            <option value="CXR">Christmas Island</option>
                            <option value="CCK">Cocos (Keeling) Islands</option>
                            <option value="COL">Colombia</option>
                            <option value="COM">Comoros</option>
                            <option value="COG">Congo</option>
                            <option value="COD">Congo, the Democratic Republic of the</option>
                            <option value="COK">Cook Islands</option>
                            <option value="CRI">Costa Rica</option>
                            <option value="CIV">Côte d'Ivoire</option>
                            <option value="HRV">Croatia</option>
                            <option value="CUB">Cuba</option>
                            <option value="CUW">Curaçao</option>
                            <option value="CYP">Cyprus</option>
                            <option value="CZE">Czech Republic</option>
                            <option value="DNK">Denmark</option>
                            <option value="DJI">Djibouti</option>
                            <option value="DMA">Dominica</option>
                            <option value="DOM">Dominican Republic</option>
                            <option value="ECU">Ecuador</option>
                            <option value="EGY">Egypt</option>
                            <option value="SLV">El Salvador</option>
                            <option value="GNQ">Equatorial Guinea</option>
                            <option value="ERI">Eritrea</option>
                            <option value="EST">Estonia</option>
                            <option value="ETH">Ethiopia</option>
                            <option value="FLK">Falkland Islands (Malvinas)</option>
                            <option value="FRO">Faroe Islands</option>
                            <option value="FJI">Fiji</option>
                            <option value="FIN">Finland</option>
                            <option value="FRA">France</option>
                            <option value="GUF">French Guiana</option>
                            <option value="PYF">French Polynesia</option>
                            <option value="ATF">French Southern Territories</option>
                            <option value="GAB">Gabon</option>
                            <option value="GMB">Gambia</option>
                            <option value="GEO">Georgia</option>
                            <option value="DEU">Germany</option>
                            <option value="GHA">Ghana</option>
                            <option value="GIB">Gibraltar</option>
                            <option value="GRC">Greece</option>
                            <option value="GRL">Greenland</option>
                            <option value="GRD">Grenada</option>
                            <option value="GLP">Guadeloupe</option>
                            <option value="GUM">Guam</option>
                            <option value="GTM">Guatemala</option>
                            <option value="GGY">Guernsey</option>
                            <option value="GIN">Guinea</option>
                            <option value="GNB">Guinea-Bissau</option>
                            <option value="GUY">Guyana</option>
                            <option value="HTI">Haiti</option>
                            <option value="HMD">Heard Island and McDonald Islands</option>
                            <option value="VAT">Holy See (Vatican City State)</option>
                            <option value="HND">Honduras</option>
                            <option value="HKG">Hong Kong</option>
                            <option value="HUN">Hungary</option>
                            <option value="ISL">Iceland</option>
                            <option value="IND">India</option>
                            <option value="IDN">Indonesia</option>
                            <option value="IRN">Iran, Islamic Republic of</option>
                            <option value="IRQ">Iraq</option>
                            <option value="IRL">Ireland</option>
                            <option value="IMN">Isle of Man</option>
                            <option value="ISR">Israel</option>
                            <option value="ITA">Italy</option>
                            <option value="JAM">Jamaica</option>
                            <option value="JPN">Japan</option>
                            <option value="JEY">Jersey</option>
                            <option value="JOR">Jordan</option>
                            <option value="KAZ">Kazakhstan</option>
                            <option value="KEN">Kenya</option>
                            <option value="KIR">Kiribati</option>
                            <option value="PRK">Korea, Democratic People's Republic of</option>
                            <option value="KOR">Korea, Republic of</option>
                            <option value="KWT">Kuwait</option>
                            <option value="KGZ">Kyrgyzstan</option>
                            <option value="LAO">Lao People's Democratic Republic</option>
                            <option value="LVA">Latvia</option>
                            <option value="LBN">Lebanon</option>
                            <option value="LSO">Lesotho</option>
                            <option value="LBR">Liberia</option>
                            <option value="LBY">Libya</option>
                            <option value="LIE">Liechtenstein</option>
                            <option value="LTU">Lithuania</option>
                            <option value="LUX">Luxembourg</option>
                            <option value="MAC">Macao</option>
                            <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                            <option value="MDG">Madagascar</option>
                            <option value="MWI">Malawi</option>
                            <option value="MYS">Malaysia</option>
                            <option value="MDV">Maldives</option>
                            <option value="MLI">Mali</option>
                            <option value="MLT">Malta</option>
                            <option value="MHL">Marshall Islands</option>
                            <option value="MTQ">Martinique</option>
                            <option value="MRT">Mauritania</option>
                            <option value="MUS">Mauritius</option>
                            <option value="MYT">Mayotte</option>
                            <option value="MEX">Mexico</option>
                            <option value="FSM">Micronesia, Federated States of</option>
                            <option value="MDA">Moldova, Republic of</option>
                            <option value="MCO">Monaco</option>
                            <option value="MNG">Mongolia</option>
                            <option value="MNE">Montenegro</option>
                            <option value="MSR">Montserrat</option>
                            <option value="MAR">Morocco</option>
                            <option value="MOZ">Mozambique</option>
                            <option value="MMR">Myanmar</option>
                            <option value="NAM">Namibia</option>
                            <option value="NRU">Nauru</option>
                            <option value="NPL">Nepal</option>
                            <option value="NLD">Netherlands</option>
                            <option value="NCL">New Caledonia</option>
                            <option value="NZL">New Zealand</option>
                            <option value="NIC">Nicaragua</option>
                            <option value="NER">Niger</option>
                            <option value="NGA">Nigeria</option>
                            <option value="NIU">Niue</option>
                            <option value="NFK">Norfolk Island</option>
                            <option value="MNP">Northern Mariana Islands</option>
                            <option value="NOR">Norway</option>
                            <option value="OMN">Oman</option>
                            <option value="PAK">Pakistan</option>
                            <option value="PLW">Palau</option>
                            <option value="PSE">Palestinian Territory, Occupied</option>
                            <option value="PAN">Panama</option>
                            <option value="PNG">Papua New Guinea</option>
                            <option value="PRY">Paraguay</option>
                            <option value="PER">Peru</option>
                            <option value="PHL">Philippines</option>
                            <option value="PCN">Pitcairn</option>
                            <option value="POL">Poland</option>
                            <option value="PRT">Portugal</option>
                            <option value="PRI">Puerto Rico</option>
                            <option value="QAT">Qatar</option>
                            <option value="REU">Réunion</option>
                            <option value="ROU">Romania</option>
                            <option value="RUS">Russian Federation</option>
                            <option value="RWA">Rwanda</option>
                            <option value="BLM">Saint Barthélemy</option>
                            <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value="KNA">Saint Kitts and Nevis</option>
                            <option value="LCA">Saint Lucia</option>
                            <option value="MAF">Saint Martin (French part)</option>
                            <option value="SPM">Saint Pierre and Miquelon</option>
                            <option value="VCT">Saint Vincent and the Grenadines</option>
                            <option value="WSM">Samoa</option>
                            <option value="SMR">San Marino</option>
                            <option value="STP">Sao Tome and Principe</option>
                            <option value="SAU">Saudi Arabia</option>
                            <option value="SEN">Senegal</option>
                            <option value="SRB">Serbia</option>
                            <option value="SYC">Seychelles</option>
                            <option value="SLE">Sierra Leone</option>
                            <option value="SGP">Singapore</option>
                            <option value="SXM">Sint Maarten (Dutch part)</option>
                            <option value="SVK">Slovakia</option>
                            <option value="SVN">Slovenia</option>
                            <option value="SLB">Solomon Islands</option>
                            <option value="SOM">Somalia</option>
                            <option value="ZAF">South Africa</option>
                            <option value="SGS">South Georgia and the South Sandwich Islands</option>
                            <option value="SSD">South Sudan</option>
                            <option value="ESP">Spain</option>
                            <option value="LKA">Sri Lanka</option>
                            <option value="SDN">Sudan</option>
                            <option value="SUR">Suriname</option>
                            <option value="SJM">Svalbard and Jan Mayen</option>
                            <option value="SWZ">Swaziland</option>
                            <option value="SWE">Sweden</option>
                            <option value="CHE">Switzerland</option>
                            <option value="SYR">Syrian Arab Republic</option>
                            <option value="TWN">Taiwan, Province of China</option>
                            <option value="TJK">Tajikistan</option>
                            <option value="TZA">Tanzania, United Republic of</option>
                            <option value="THA">Thailand</option>
                            <option value="TLS">Timor-Leste</option>
                            <option value="TGO">Togo</option>
                            <option value="TKL">Tokelau</option>
                            <option value="TON">Tonga</option>
                            <option value="TTO">Trinidad and Tobago</option>
                            <option value="TUN">Tunisia</option>
                            <option value="TUR">Turkey</option>
                            <option value="TKM">Turkmenistan</option>
                            <option value="TCA">Turks and Caicos Islands</option>
                            <option value="TUV">Tuvalu</option>
                            <option value="UGA">Uganda</option>
                            <option value="UKR">Ukraine</option>
                            <option value="ARE">United Arab Emirates</option>
                            <option value="GBR">United Kingdom</option>
                            <option value="USA">United States</option>
                            <option value="UMI">United States Minor Outlying Islands</option>
                            <option value="URY">Uruguay</option>
                            <option value="UZB">Uzbekistan</option>
                            <option value="VUT">Vanuatu</option>
                            <option value="VEN">Venezuela, Bolivarian Republic of</option>
                            <option value="VNM">Viet Nam</option>
                            <option value="VGB">Virgin Islands, British</option>
                            <option value="VIR">Virgin Islands, U.S.</option>
                            <option value="WLF">Wallis and Futuna</option>
                            <option value="ESH">Western Sahara</option>
                            <option value="YEM">Yemen</option>
                            <option value="ZMB">Zambia</option>
                            <option value="ZWE">Zimbabwe</option>
                        </select>
                        <label class="label" for="country">Country</label>
                    </div>

                    <div class="input-group">
                        <input type="text" class="input" name="contact_nmbr" id="nbr" >
                        <label class="label" for="nbr">Mobile Number</label>
                    </div>

                </fieldset>
                
                <fieldset class="tab-panel">
                    <legend>Account Activation</legend>
                    <div class="input-group">
                        <label class="label"><i class="lnr lnr-envelope"></i>Check Your Email</label>
                    </div>

                    <div class="input-group" style="margin-top: 20%;"> 
                        <label class="label" for="email">Conformation code</label>
                        <input type="text" class="input" name="email_code" id="email">
                        
                    </div>
                </fieldset>
               
            </div>
            <input class="submit-button buttonn" type="submit" name="active" value="Activate">
            <nav id="tab-nav" class="tab-nav">
                <button class="tab-nav__button nav-button prev lnr lnr-arrow-up"></button>
                <button class="tab-nav__button nav-button next lnr lnr-arrow-down" style="margin-left:-140%; width: 300%;">Next</button>
            </nav>
            
        </form>
    </div>
    <?php } ?>

<style type="text/css">
    .hide{
        display: none;
    }
    nav{
    padding: 10px 47px;
    }
</style>
<script type="text/javascript">
    //Get all input elements of the form with a .input class
const getInputs = container => [...container.querySelectorAll('.input')];

//Get all fieldsets within the form element 

const getFieldsets = container => [...container.querySelectorAll('fieldset')];

//Get an Array with the distance of each fieldset element to apply a margin
const getArrayOfMargins = fieldsetsContainer => {
  return getFieldsets(fieldsetsContainer).map((fieldset, i) => fieldset.offsetHeight * i);

};



// Apply or add .focus class according if a element gain or loss its focus.
let inpustEvent = container => {

  getInputs(container).map(input => {
    input.addEventListener("focusin", e => {
      let inputParent = e.target.parentElement;

      if (!inputParent.classList.contains('focus')) {
        inputParent.classList.add('focus');
      }
    });
    input.addEventListener("blur", e => {
      let inputParent = e.target.parentElement;
      if (input.required) {
        if (e.target.value == "") {
          inputParent.classList.replace('focus', 'error');
        } else {
          inputParent.classList.remove('error');
        }
      } else {
        if (e.target.value == "") {
          inputParent.classList.remove('focus');
        }
      }

    });
    input.addEventListener('keydown', e => {

      if (e.key === "Enter" || e.key === "Tab") {
        e.preventDefault();
        if (e.key === "Enter") {
          container.querySelectorAll('.next')[0].click();
        }

      }
    });


  });
};
//Add function Navegation Prev and Next fr the fieldsets elements

let formNavigation = (buttonsContainer, fieldsetsContainer, progressBarContainer, i) => {
  let margins = getArrayOfMargins(fieldsetsContainer),
  margin,
  progressBarItems = [...progressBarContainer.querySelectorAll('li')];


  buttonsContainer.addEventListener("click", e => {

    e.preventDefault();

    let el = e.target,
    getFieldsetsLenght = getFieldsets(fieldsetsContainer).length;

    if (el.tagName === "BUTTON") {

      if (el.classList.contains("prev")) {



        if (i > 0) {
          margin = -margins[i - 1];
          i--;
        } else {
          i = 0;
        }

        fieldsetsContainer.style.marginTop = margin + "px";



      } else if (el.classList.contains("next")) {

        if (formValidation(i, fieldsetsContainer, progressBarContainer)) {

          if (i == getFieldsetsLenght - 1) {

            // margin = margins[0];
            i = getFieldsetsLenght - 1;
            document.querySelectorAll('.submit-button')[0].classList.add('active');
            document.querySelectorAll('.next')[0].classList.add('hide');

          } else {

            margin = -margins[i + 1];
            i++;

          }

        }
        fieldsetsContainer.style.marginTop = margin + "px";
      }

    }
    progressBarItems.forEach(element => {
      if (progressBarItems[i] === element) {
        element.classList.add('current');
        if (element.classList.contains('complete')) {
          element.classList.remove('current');
        }
      } else {
        element.classList.remove('current');
      }

    });
  });
  progressBar(progressBarContainer, fieldsetsContainer);

};


//Add function navegation with the progress bar. 

let progressBar = (progressBarContainer, fieldsetsContainer) => {

  let links = [...progressBarContainer.querySelectorAll('a')],
  margins = getArrayOfMargins(fieldsetsContainer);

  progressBarContainer.addEventListener('click', e => {
    e.preventDefault();
    if (e.target.tagName === "A" && (e.target.parentElement.classList.contains('complete') || e.target.parentElement.classList.contains('current'))) {
      let index = links.indexOf(e.target);
      fieldsetsContainer.style.marginTop = -margins[index] + "px";
    }

  });
};
//Form Validation for each group of inputs within the fieldsets elements. Here you can add your own custom validation.

let formValidation = (i, fieldsetsContainer, progressBarContainer) => {

  let fieldsets = getFieldsets(fieldsetsContainer),
  currentFieldset = fieldsets[i],
  inputs = getInputs(currentFieldset);


  for (const key in inputs) {

    let input = inputs[key];
    if (input.required) {
      if (input.value != "") {

        input.parentElement.classList.remove('error');
        continue;

      } else {

        console.dir(input.required);
        input.parentElement.classList.add('error');
        return false;

      }
    }

  }
  progressBarContainer.querySelectorAll('li')[i].classList.add('complete');

  return true;

};

//Submit button. Here you can add ajax request.
let submit = (container, fieldsetsContainer) => {
  let submitButton = container.querySelectorAll("input[type='submit']");
  container.addEventListener('click', e => {
    if (e.target.type === "submit" && e.target.tagName === "INPUT") {
    $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : '', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true
        })
        .done(function(data) {
        // log data to the console so we can see
       console.log(data);
       })
      e.preventDefault();
      let overlay = document.createElement('div');
      overlay.classList.add('overlay');
      overlay.innerHTML = ` <span class="load"></span>`;
      container.appendChild(overlay);
      setTimeout(() => {
        overlay.innerHTML = ` <span class="success">✔ you have successfully registered</span>`;
      }, 2000);
    }
  });

};


const stepsforminit = container => {
  let form = container,
  fieldsetsContainer = container.querySelectorAll('#fieldset-container')[0],
  progressBarContainer = container.querySelectorAll('#progress-bar')[0],
  buttonsContainer = container.querySelectorAll('.tab-nav')[0],
  i = 0;
  inpustEvent(form);
  formNavigation(buttonsContainer, fieldsetsContainer, progressBarContainer, i);
  submit(form, fieldsetsContainer);
};

stepsforminit(document.getElementById('form-wrapper'));
</script>
