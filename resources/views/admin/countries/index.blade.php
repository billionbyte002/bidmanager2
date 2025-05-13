@extends('layout.app')
@section('main_content')
    <!-- Begin CSS STYLES -->
    <link href="https://designreset.com/cork/html/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://designreset.com/cork/html/src/assets/css/light/forms/switches.css">

    <link href="https://designreset.com/cork/html/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://designreset.com/cork/html/src/assets/css/dark/forms/switches.css">
    <link href="https://designreset.com/cork/html/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="https://designreset.com/cork/html/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <style>
        .table-bordered td {
            width: 33.33%; 
        }
        .switch.form-switch-custom .input-checkbox {
                height: 36px; /* Adjust this value to decrease the height */
        }

        .switch.form-switch-custom .switch-chk-label {
            line-height: 15px; /* Match line-height with height for centering */
        }
        .switch.form-switch-custom .input-checkbox {
                height: 26px; /* Adjust height as needed */
                display: inline-flex;
                align-items: center;
                border-radius: 50%; /* Rounded corners for the switch container */
                padding: 0px;
            }
            .switch.form-switch-custom .switch-input {
            border-radius: 60px; /* Round the switch itself */
            }

            .switch.form-switch-custom .switch-chk-label {
                margin: 0 5px; /* Adjust margin as needed */
            }
    </style>
    <!-- END CSS STYLES -->
    <div id="content" class="main-content">
        <div class="container">
        
            <div class="container-fluid">
            
                <div class="row layout-top-spacing">
                
                    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">

                            <div class="widget-content widget-content-area">
                                            <div>
                                                <h4 class="head" style="color:rgb(76, 76, 252)"> Manage Excluded Countries</h4>
                                            </div><br>
                                            <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                                                      <strong>Notice!</strong> You will see any project for these countries, and these project will always be ignored when auto bidding is enabled.
                                            </div>
                                
                                <div class="table-responsive" style="border:1px solid;">
                                
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><div class="col-md-6 text-center">
                                                                <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-label-toggle show mb-sm-0 mb-3" style="height:auto;">
                                                                    <div class="input-checkbox">
                                                                        <span class="switch-chk-label label-left">Include</span>
                                                                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-label" onchange="this.checked ? this.closest('.inner-label-toggle').classList.add('show') : this.closest('.inner-label-toggle').classList.remove('show')" checked>
                                                                        <span class="switch-chk-label label-right">Exclude</span>
                                                                    </div>
                                                                        <div style="margin-left: 10px;">Afghanistan</div>
                                                    </div>
                                                </td>
                                                <td>Aland Island</td>
                                                <td>Albania</td>
                                            </tr>                                                                        
                                            <tr>
                                                <td>Algeria</td>
                                                <td>American Samoa</td>
                                                <td>Andorra</td>
                                            </tr>
                                            <tr>
                                                <td>Angola</td>
                                                <td>Anguilla</td>
                                                <td>Antarctica</td>
                                            </tr>
                                            <tr>
                                                <td>Antigua and Barbuda</td>
                                                <td>Argentina</td>
                                                <td>Armenia</td>
                                            </tr>
                                            <tr>
                                                <td>Aruba</td>
                                                <td>Australia</td>
                                                <td>Austria</td>
                                            </tr>
                                            <tr>
                                                <td>Azerbaijan</td>
                                                <td>Bahamas</td>
                                                <td>Bahrain</td>
                                            </tr>
                                            <tr>
                                                <td>Bangladesh</td>
                                                <td>Barbados</td>
                                                <td>Belarus</td>
                                            </tr>
                                            <tr>
                                                <td>Belgium</td>
                                                <td>Belize</td>
                                                <td>Benin</td>
                                            </tr>
                                            <tr>
                                                <td>Bermuda</td>
                                                <td>Bhutan</td>
                                                <td>Bolivia (Plurinational State of)</td>
                                            </tr>
                                            <tr>
                                                <td>Bonaire, Sint Eustatius and Saba</td>
                                                <td>Bosnia and Herzegovina</td>
                                                <td>Botswana</td>
                                            </tr>
                                            <tr>
                                                <td>Bouvet Island</td>
                                                <td>Brazil</td>
                                                <td>British Indian Ocean Territory</td>
                                            </tr>
                                            <tr>
                                                <td>Brunei Darussalam</td>
                                                <td>Bulgaria</td>
                                                <td>Burkina Faso</td>
                                            </tr>
                                            <tr>
                                                <td>Burundi</td>
                                                <td>Cabo Verde</td>
                                                <td>Cambodia</td>
                                            </tr>
                                            <tr>
                                                <td>Cameroon</td>
                                                <td>Canada</td>
                                                <td>Cayman Islands</td>
                                            </tr>
                                            <tr>
                                                <td>Central African Republic</td>
                                                <td>Chad</td>
                                                <td>Chile</td>
                                            </tr>
                                            <tr>
                                                <td>China</td>
                                                <td>Christmas Island</td>
                                                <td>Cocos (Keeling) Islands</td>
                                            </tr>
                                            <tr>
                                                <td>Colombia</td>
                                                <td>Comoros</td>
                                                <td>Congo</td>
                                            </tr>
                                            <tr>
                                                <td>Congo (Democratic Republic of the)</td>
                                                <td>Cook Islands</td>
                                                <td>Costa Rica</td>
                                            </tr>
                                            <tr>
                                                <td>Côte d'Ivoire</td>
                                                <td>Croatia</td>
                                                <td>Cuba</td>
                                            </tr>
                                            <tr>
                                                <td>Curaçao</td>
                                                <td>Cyprus</td>
                                                <td>Czech Republic</td>
                                            </tr>
                                            <tr>
                                                <td>Denmark</td>
                                                <td>Djibouti</td>
                                                <td>Dominica</td>
                                            </tr>
                                            <tr>
                                                <td>Dominican Republic</td>
                                                <td>Ecuador</td>
                                                <td>Egypt</td>
                                            </tr>
                                            <tr>
                                                <td>El Salvador</td>
                                                <td>Equatorial Guinea</td>
                                                <td>Eritrea</td>
                                            </tr>
                                            <tr>
                                                <td>Estonia</td>
                                                <td>Eswatini</td>
                                                <td>Ethiopia</td>
                                            </tr>
                                            <tr>
                                                <td>Falkland Islands (Malvinas)</td>
                                                <td>Faroe Islands</td>
                                                <td>Fiji</td>
                                            </tr>
                                            <tr>
                                                <td>Finland</td>
                                                <td>France</td>
                                                <td>French Guiana</td>
                                            </tr>
                                            <tr>
                                                <td>French Polynesia</td>
                                                <td>French Southern Territories</td>
                                                <td>Gabon</td>
                                            </tr>
                                            <tr>
                                                <td>Gambia</td>
                                                <td>Georgia</td>
                                                <td>Germany</td>
                                            </tr>
                                            <tr>
                                                <td>Ghana</td>
                                                <td>Gibraltar</td>
                                                <td>Greece</td>
                                            </tr>
                                            <tr>
                                                <td>Greenland</td>
                                                <td>Grenada</td>
                                                <td>Guadeloupe</td>
                                            </tr>
                                            <tr>
                                                <td>Guam</td>
                                                <td>Guatemala</td>
                                                <td>Guernsey</td>
                                            </tr>
                                            <tr>
                                                <td>Guinea</td>
                                                <td>Guinea-Bissau</td>
                                                <td>Guyana</td>
                                            </tr>
                                            <tr>
                                                <td>Haiti</td>
                                                <td>Heard Island and McDonald Islands</td>
                                                <td>Holy See</td>
                                            </tr>
                                            <tr>
                                                <td>Honduras</td>
                                                <td>Hong Kong</td>
                                                <td>Hungary</td>
                                            </tr>
                                            <tr>
                                                <td>Iceland</td>
                                                <td>India</td>
                                                <td>Indonesia</td>
                                            </tr>
                                            <tr>
                                                <td>Iran (Islamic Republic of)</td>
                                                <td>Iraq</td>
                                                <td>Ireland</td>
                                            </tr>
                                            <tr>
                                                <td>Isle of Man</td>
                                                <td>Israel</td>
                                                <td>Italy</td>
                                            </tr>
                                            <tr>
                                                <td>Jamaica</td>
                                                <td>Japan</td>
                                                <td>Jersey</td>
                                            </tr>
                                            <tr>
                                                <td>Jordan</td>
                                                <td>Kazakhstan</td>
                                                <td>Kenya</td>
                                            </tr>
                                            <tr>
                                                <td>Kiribati</td>
                                                <td>Korea (Democratic People's Republic of)</td>
                                                <td>Korea (Republic of)</td>
                                            </tr>
                                            <tr>
                                                <td>Kuwait</td>
                                                <td>Kyrgyzstan</td>
                                                <td>Lao People's Democratic Republic</td>
                                            </tr>
                                            <tr>
                                                <td>Latvia</td>
                                                <td>Lebanon</td>
                                                <td>Lesotho</td>
                                            </tr>
                                            <tr>
                                                <td>Liberia</td>
                                                <td>Libya</td>
                                                <td>Liechtenstein</td>
                                            </tr>
                                            <tr>
                                                <td>Lithuania</td>
                                                <td>Luxembourg</td>
                                                <td>Macao</td>
                                            </tr>
                                            <tr>
                                                <td>Madagascar</td>
                                                <td>Malawi</td>
                                                <td>Malaysia</td>
                                            </tr>
                                            <tr>
                                                <td>Maldives</td>
                                                <td>Mali</td>
                                                <td>Malta</td>
                                            </tr>
                                            <tr>
                                                <td>Marshall Islands</td>
                                                <td>Martinique</td>
                                                <td>Mauritania</td>
                                            </tr>
                                            <tr>
                                                <td>Mauritius</td>
                                                <td>Mayotte</td>
                                                <td>Mexico</td>
                                            </tr>
                                            <tr>
                                                <td>Micronesia (Federated States of)</td>
                                                <td>Moldova (Republic of)</td>
                                                <td>Monaco</td>
                                            </tr>
                                            <tr>
                                                <td>Mongolia</td>
                                                <td>Montenegro</td>
                                                <td>Montserrat</td>
                                            </tr>
                                            <tr>
                                                <td>Morocco</td>
                                                <td>Mozambique</td>
                                                <td>Myanmar</td>
                                            </tr>
                                            <tr>
                                                <td>Namibia</td>
                                                <td>Nauru</td>
                                                <td>Nepal</td>
                                            </tr>
                                            <tr>
                                                <td>Netherlands</td>
                                                <td>New Caledonia</td>
                                                <td>New Zealand</td>
                                            </tr>
                                            <tr>
                                                <td>Nicaragua</td>
                                                <td>Niger</td>
                                                <td>Nigeria</td>
                                            </tr>
                                            <tr>
                                                <td>Niue</td>
                                                <td>Norfolk Island</td>
                                                <td>North Macedonia</td>
                                            </tr>
                                            <tr>
                                                <td>Northern Mariana Islands</td>
                                                <td>Norway</td>
                                                <td>Oman</td>
                                            </tr>
                                            <tr>
                                                <td>Pakistan</td>
                                                <td>Palau</td>
                                                <td>Palestine, State of</td>
                                            </tr>
                                            <tr>
                                                <td>Panama</td>
                                                <td>Papua New Guinea</td>
                                                <td>Paraguay</td>
                                            </tr>
                                            <tr>
                                                <td>Peru</td>
                                                <td>Philippines</td>
                                                <td>Pitcairn</td>
                                            </tr>
                                            <tr>
                                                <td>Poland</td>
                                                <td>Portugal</td>
                                                <td>Puerto Rico</td>
                                            </tr>
                                            <tr>
                                                <td>Qatar</td>
                                                <td>Réunion</td>
                                                <td>Romania</td>
                                            </tr>
                                            <tr>
                                                <td>Russian Federation</td>
                                                <td>Rwanda</td>
                                                <td>Saint Barthélemy</td>
                                            </tr>
                                            <tr>
                                                <td>Saint Helena, Ascension and Tristan da Cunha</td>
                                                <td>Saint Kitts and Nevis</td>
                                                <td>Saint Lucia</td>
                                            </tr>
                                            <tr>
                                                <td>Saint Martin (French part)</td>
                                                <td>Saint Pierre and Miquelon</td>
                                                <td>Saint Vincent and the Grenadines</td>
                                            </tr>
                                            <tr>
                                                <td>Samoa</td>
                                                <td>San Marino</td>
                                                <td>Sao Tome and Principe</td>
                                            </tr>
                                            <tr>
                                                <td>Saudi Arabia</td>
                                                <td>Senegal</td>
                                                <td>Serbia</td>
                                            </tr>
                                            <tr>
                                                <td>Seychelles</td>
                                                <td>Sierra Leone</td>
                                                <td>Singapore</td>
                                            </tr>
                                            <tr>
                                                <td>Sint Maarten (Dutch part)</td>
                                                <td>Slovakia</td>
                                                <td>Slovenia</td>
                                            </tr>
                                            <tr>
                                                <td>Solomon Islands</td>
                                                <td>Somalia</td>
                                                <td>South Africa</td>
                                            </tr>
                                            <tr>
                                                <td>South Georgia and the South Sandwich Islands</td>
                                                <td>South Sudan</td>
                                                <td>Spain</td>
                                            </tr>
                                            <tr>
                                                <td>Sri Lanka</td>
                                                <td>Sudan</td>
                                                <td>Suriname</td>
                                            </tr>
                                            <tr>
                                                <td>Sweden</td>
                                                <td>Switzerland</td>
                                                <td>Syrian Arab Republic</td>
                                            </tr>
                                            <tr>
                                                <td>Uzbekistan</td>
                                                <td>Vanuatu</td>
                                                <td>Venezuela</td>
                                            </tr>
                                            <tr>
                                                <td>Vietnam</td>
                                                <td>Western Sahara</td>
                                                <td>Wallis Futuna</td>
                                            </tr>
                                            <tr>
                                                <td>Yemen</td>
                                                <td>Zambia</td>
                                                <td>Zimbabwe</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BEGIN JS SECTION --}}
    <script src="https://designreset.com/cork/html/src/assets/js/scrollspyNav.js"></script>
    <script>
        checkall('checkbox_parent_all', 'checkbox_child');
        checkall('hover_parent_all', 'hover_child');
        checkall('striped_parent_all', 'striped_child');
        checkall('bordered_parent_all', 'bordered_child');
        checkall('mixed_parent_all', 'mixed_child');
        checkall('noSpacing_parent_all', 'noSpacing_child');
        checkall('custom_mixed_parent_all', 'custom_mixed_child');
    </script>
    {{-- END JS SECTION --}}
@endsection
