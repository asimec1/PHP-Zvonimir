<?php
print '

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="Projekt">
        <meta name="keywords" content="Home, html, News, Gallery">
        <meta name="author" content="Zvonimir Ćosić">
        <meta itemprop="name" content="Hello Example">
        <meta itemprop="description" content="Some description">
        <meta itemprop="image" content="Your URL">
        <meta property="og:title" content="Hello Example">
        <meta property="og:type" content="article">
        <meta property="og:url" content="Your URL">
        <meta property="og:image" content="Your URL">
        <meta property="og:description" content="Some description">
        <meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
        <meta name="twitter:title" content="Hello Example">
        <meta name="twitter:description" content="Some description">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <title>Zvonimir Ćosić</title>
    </head>

    <body>
        <header>
            <div class="logo">
                <img src="gallery/logo.png">
            </div>
            <nav> ';
                include("menu.php");
            print '
            </nav>
        </header>
        <main>
            <h2>PHOTOGRAPHER BASED IN ZAGREB</h2>
            <h3>Registration</h3>
	<div  id="contact">';
	$action = ( array_key_exists( 'action', $_POST) ? $_POST['action'] : "" );
	if ($action == FALSE) {
		print '
		<form action="" id="contact_form" name="contact_form" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">
	</div>
			<label for="fname">Ime : *</label>
			<input type="text" id="fname" name="firstname" placeholder="Vaše ime ..." required>
			<br>
			<label for="lname">Prezime : *</label>
			<input type="text" id="lname" name="lastname" placeholder="Vaše prezime ..." required>
			<br>
				
			<label for="email">E-mail : *</label>
			<input type="email" id="email" name="email" placeholder="Vaš e-mail ..." required>
			<br>
			<label for="username">Korisničko ime : * <small>(Korisničko ime mora imati minimalno 5 znakova, a maksimalno 10 znakova)</small></label>
			<input type="text" id="username" name="username" pattern=".{5,10}" placeholder="Vaše korisničko ime ..." required>
			<br>
									
			<label for="password">Lozinka : * <small>(Lozinka ne smije imati manje od 4 znaka)</small></label>
			<input type="text" id="password" name="password" pattern=".{4,100}" placeholder="Vaša lozinka..." required>
			<br>
			<label for="country">Zemlja : </label>
			<select id="country" name="country">
							<option value="">molimo odaberite</option>
							<option value="AF"> Afghanistan</option>
										<option value= "AL"> Albania</option>
										<option value= "DZ"> Algeria</option>
										<option value= "DS"> American Samoa</option>
										<option value= "AD"> Andorra</option>
										<option value= "AO"> Angola</option>
										<option value= "AI"> Anguilla</option>
										<option value= "AQ"> Antarctica</option>
										<option value= "AG"> Antigua and Barbuda</option>
										<option value= "AR"> Argentina</option>
										<option value= "AM"> Armenia</option>
										<option value= "AW"> Aruba</option>
										<option value= "AU"> Australia</option>
										<option value= "AT"> Austria</option>
										<option value= "AZ"> Azerbaijan</option>
										<option value= "BS"> Bahamas</option>
										<option value= "BH"> Bahrain</option>
										<option value= "BD"> Bangladesh</option>
										<option value= "BB"> Barbados</option>
										<option value= "BY"> Belarus</option>
										<option value= "BE"> Belgium</option>
										<option value= "BZ"> Belize</option>
										<option value= "BJ"> Benin</option>
										<option value= "BM"> Bermuda</option>
										<option value= "BT"> Bhutan</option>
										<option value= "BO"> Bolivia</option>
										<option value= "BA"> Bosnia and Herzegovina</option>
										<option value= "BW"> Botswana</option>
										<option value= "BV"> Bouvet Island</option>
										<option value= "BR"> Brazil</option>
										<option value= "IO"> British Indian Ocean Territory</option>
										<option value= "BN"> Brunei Darussalam</option>
										<option value= "BG"> Bulgaria</option>
										<option value= "BF"> Burkina Faso</option>
										<option value= "BI"> Burundi</option>
										<option value= "KH"> Cambodia</option>
										<option value= "CM"> Cameroon</option>
										<option value= "CA"> Canada</option>
										<option value= "CV"> Cape Verde</option>
										<option value= "KY"> Cayman Islands</option>
										<option value= "CF"> Central African Republic</option>
										<option value= "TD"> Chad</option>
										<option value= "CL"> Chile</option>
										<option value= "CN"> China</option>
										<option value= "CX"> Christmas Island</option>
										<option value= "CC"> Cocos (Keeling) Islands</option>
										<option value= "CO"> Colombia</option>
										<option value= "KM"> Comoros</option>
										<option value= "CG"> Congo</option>
										<option value= "CK"> Cook Islands</option>
										<option value= "CR"> Costa Rica</option>
										<option value= "HR"> Croatia (Hrvatska)</option>
										<option value= "CU"> Cuba</option>
										<option value= "CY"> Cyprus</option>
										<option value= "CZ"> Czech Republic</option>
										<option value= "DK"> Denmark</option>
										<option value= "DJ"> Djibouti</option>
										<option value= "DM"> Dominica</option>
										<option value= "DO"> Dominican Republic</option>
										<option value= "TP"> East Timor</option>
										<option value= "EC"> Ecuador</option>
										<option value= "EG"> Egypt</option>
										<option value= "SV"> El Salvador</option>
										<option value= "GQ"> Equatorial Guinea</option>
										<option value= "ER"> Eritrea</option>
										<option value= "EE"> Estonia</option>
										<option value= "ET"> Ethiopia</option>
										<option value= "FK"> Falkland Islands (Malvinas)</option>
										<option value= "FO"> Faroe Islands</option>
										<option value= "FJ"> Fiji</option>
										<option value= "FI"> Finland</option>
										<option value= "FR"> France</option>
										<option value= "FX"> France> Metropolitan</option>
										<option value= "GF"> French Guiana</option>
										<option value= "PF"> French Polynesia</option>
										<option value= "TF"> French Southern Territories</option>
										<option value= "GA"> Gabon</option>
										<option value= "GM"> Gambia</option>
										<option value= "GE"> Georgia</option>
										<option value= "DE"> Germany</option>
										<option value= "GH"> Ghana</option>
										<option value= "GI"> Gibraltar</option>
										<option value= "GK"> Guernsey</option>
										<option value="GR"> Greece</option>
										<option value= "GL"> Greenland</option>
										<option value= "GD"> Grenada</option>
										<option value="GP"> Guadeloupe</option>
										<option value= "GU"> "Guam</option>
										<option value= "GT"> "Guatemala</option>
										<option value= "GN"> "Guinea</option>
										<option value= "GW"> "Guinea-Bissau</option>
										<option value= "GY"> "Guyana</option>
										<option value= "HT"> "Haiti</option>
										<option value= "HM"> "Heard and Mc Donald Islands</option>
										<option value= "HN"> "Honduras</option>
										<option value= "HK"> "Hong Kong</option>
										<option value= "HU"> "Hungary</option>
										<option value= "IS"> "Iceland</option>
										<option value= "IN"> "India</option>
										<option value= "IM"> "Isle of Man</option>
										<option value= "ID"> "Indonesia</option>
										<option value= "IR"> "Iran (Islamic Republic of)</option>
										<option value= "IQ"> "Iraq</option>
										<option value= "IE"> "Ireland</option>
										<option value= "IL"> "Israel</option>
										<option value= "IT"> "Italy</option>
										<option value= "CI"> "Ivory Coast</option>
										<option value= "JE"> "Jersey</option>
										<option value= "JM"> "Jamaica</option>
										<option value= "JP"> "Japan</option>
										<option value= "JO"> "Jordan</option>
										<option value= "KZ"> "Kazakhstan</option>
										<option value= "KE"> "Kenya</option>
										<option value= "KI"> "Kiribati</option>
										<option value= "KP"> Korea> Democratic People""s Republic of</option>
										<option value= "KR"> Korea> Republic of</option>
										<option value= "XK"> Kosovo</option>
										<option value= "KW"> Kuwait</option>
										<option value= "KG"> Kyrgyzstan</option>
										<option value= "LA"> Lao People""s Democratic Republic</option>
										<option value= "LV"> Latvia</option>
										<option value= "LB"> Lebanon</option>
										<option value= "LS"> Lesotho</option>
										<option value= "LR"> Liberia</option>
										<option value= "LY"> Libyan Arab Jamahiriya</option>
										<option value= "LI"> Liechtenstein</option>
										<option value= "LT"> Lithuania</option>
										<option value= "LU"> Luxembourg</option>
										<option value= "MO"> Macau</option>
										<option value= "MK"> Macedonia</option>
										<option value= "MG"> Madagascar</option>
										<option value= "MW"> Malawi</option>
										<option value= "MY"> Malaysia</option>
										<option value= "MV"> Maldives</option>
										<option value="ML"> Mali</option>
										<option value= "MT"> Malta</option>
										<option value= "MH"> Marshall Islands</option>
										<option value= "MQ"> Martinique</option>
										<option value= "MR"> Mauritania</option>
										<option value= "MU"> Mauritius</option>
										<option value= "TY"> Mayotte</option>
										<option value= "MX"> Mexico</option>
										<option value= "FM"> Micronesia> Federated States of</option>
										<option value= "MD"> Moldova> Republic of</option>
										<option value= "MC"> Monaco</option>
										<option value= "MN"> Mongolia</option>
										<option value= "ME"> Montenegro</option>
										<option value= "MS"> Montserrat</option>
										<option value= "MA"> Morocco</option>
										<option value= "MZ"> Mozambique</option>
										<option value= "MM"> Myanmar</option>
										<option value= "NA"> Namibia</option>
										<option value= "NR"> Nauru</option>
										<option value= "NP"> Nepal</option>
										<option value= "NL"> Netherlands</option>
										<option value= "AN"> Netherlands Antilles</option>
										<option value= "NC"> New Caledonia</option>
										<option value= "NZ"> New Zealand</option>
										<option value= "NI"> Nicaragua</option>
										<option value= "NE"> Niger</option>
										<option value= "NG"> Nigeria</option>
										<option value= "NU"> Niue</option>
										<option value= "NF"> Norfolk Island</option>
										<option value= "MP"> Northern Mariana Islands</option>
										<option value= "NO"> Norway</option>
										<option value= "OM"> Oman</option>
										<option value= "PK"> Pakistan</option>
										<option value= "PW"> Palau</option>
										<option value= "PS"> Palestine</option>
										<option value= "PA"> Panama</option>
										<option value= "PG"> Papua New Guinea</option>
										<option value= "PY"> Paraguay</option>
										<option value= "PE"> Peru</option>
										<option value= "PH"> Philippines</option>
										<option value= "PN"> Pitcairn</option>
										<option value= "PL"> Poland</option>
										<option value= "PT"> Portugal</option>
										<option value= "PR"> Puerto Rico</option>
										<option value= "QA"> Qatar</option>
										<option value= "RE"> Reunion</option>
										<option value= "RO"> Romania</option>
										<option value= "RU"> Russian Federation</option>
										<option value= "RW"> Rwanda</option>
										<option value= "KN"> Saint Kitts and Nevis</option>
										<option value= "LC"> Saint Lucia</option>
										<option value= "VC"> Saint Vincent and the Grenadines</option>
										<option value= "WS"> Samoa</option>
										<option value= "SM"> San Marino</option>
										<option value= "ST"> Sao Tome and Principe</option>
										<option value= "SA"> Saudi Arabia</option>
										<option value= "SN"> Senegal</option>
										<option value= "RS"> Serbia</option>
										<option value= "SC"> Seychelles</option>
										<option value= "SL"> Sierra Leone</option>
										<option value= "SG"> Singapore</option>
										<option value= "SK"> Slovakia</option>
										<option value= "SI"> Slovenia</option>
										<option value= "SB"> Solomon Islands</option>
										<option value= "SO"> Somalia</option>
										<option value= "ZA"> South Africa</option>
										<option value= "GS"> South Georgia South Sandwich Islands</option>
										<option value= "ES"> Spain</option>
										<option value= "LK"> Sri Lanka</option>
										<option value= "SH"> St. Helena</option>
										<option value= "PM"> St. Pierre and Miquelon</option>
										<option value= "SD"> Sudan</option>
										<option value= "SR"> Suriname</option>
										<option value= "SJ"> Svalbard and Jan Mayen Islands</option>
										<option value= "SZ"> Swaziland</option>
										<option value= "SE"> Sweden</option>
										<option value= "CH"> Switzerland</option>
										<option value= "SY"> Syrian Arab Republic</option>
										<option value= "TW"> Taiwan</option>
										<option value= "TJ"> Tajikistan</option>
										<option value= "TZ"> Tanzania> United Republic of</option>
										<option value= "TH"> Thailand</option>
										<option value= "TG"> Togo</option>
										<option value= "TK"> Tokelau</option>
										<option value= "TO"> Tonga</option>
										<option value= "TT"> Trinidad and Tobago</option>
										<option value= "TN"> Tunisia</option>
										<option value= "TR"> Turkey</option>
										<option value= "TM"> Turkmenistan</option>
										<option value= "TC"> Turks and Caicos Islands</option>
										<option value= "TV"> Tuvalu</option>
										<option value= "UG"> Uganda</option>
										<option value= "UA"> Ukraine</option>
										<option value= "AE"> United Arab Emirates</option>
										<option value= "GB"> United Kingdom</option>
										<option value= "US"> United States</option>
										<option value= "UM"> United States minor outlying islands</option>
										<option value= "UY"> Uruguay</option>
										<option value= "UZ"> Uzbekistan</option>
										<option value= "VU"> Vanuatu</option>
										<option value= "VA"> Vatican City State</option>
										<option value= "VE"> Venezuela</option>
										<option value= "VN"> Vietnam</option>
										<option value= "VG"> Virgin Islands (British)</option>
										<option value= "VI"> Virgin Islands (U.S.)</option>
										<option value="WF"> Wallis and Futuna Islands</option>
										<option value= "EH"> Western Sahara</option>
										<option value= "YE"> Yemen</option>
										<option value= "ZR"> Zaire</option>
										<option value= "ZM"> Zambia</option>
										<option value= "ZW"> Zimbabwe</option>
						</select>
						<div class="buttonHolder">
                        <input type="submit" value="Submit">
                    </div>
                </form>
			</main>
		</body>';
	}
	else if ($_POST['_action_'] == TRUE) {
		
		$query  = "SELECT * FROM users";
		$query .= " WHERE email='" .  $_POST['email'] . "'";
		$query .= " OR username='" .  $_POST['username'] . "'";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if ($row['email'] == '' || $row['username'] == '') {
			# password_hash https://secure.php.net/manual/en/function.password-hash.php
			# password_hash() creates a new password hash using a strong one-way hashing algorithm
			$pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
			
			$query  = "INSERT INTO users (firstname, lastname, email, username, password, country)";
			$query .= " VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "', '" . $pass_hash . "', '" . $_POST['country'] . "')";
			$result = @mysqli_query($MySQL, $query);
			
			# ucfirst() — Make a string's first character uppercase
			# strtolower() - Make a string lowercase
			echo '<p>' . ucfirst(strtolower($_POST['firstname'])) . ' ' .  ucfirst(strtolower($_POST['lastname'])) . ', thank you for registration </p>
			<hr>';
		}
		else {
			echo '<p>User with this email or username already exist!</p>';
		}
	}
	print '
	<footer>
        <div class="footer">
            <p>Social media:<br>
                <a href="https://www.linkedin.com/company/ifixit" target="_blank"><img src="dr_mreze/linkedin.svg"
                        alt="Linkedin" title="Linkedin" ></a>
                <a href="https://twitter.com/ifixit" target="_blank"><img src="dr_mreze/twitter.svg" alt="Twitter"
                        title="Twitter" ></a>
                <a href="https://plus.google.com/113372414904624897851" target="_blank"><img src="dr_mreze/google.svg"
                        alt="Google+" title="Google+"></a>
            </p> 
            <p>Copyright &copy; 2021. Zvonimir Cosic. <a href="https://google.hr"><svg width="10" height="22"
                        viewBox="0 0 118 36" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false"></svg>
        </div>
    </footer>';

?>