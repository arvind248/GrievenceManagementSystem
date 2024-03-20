<?php include "Config/connection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".\bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href=".\style\style.css">
    <style>


    </style>
</head>
<body>


<div class="container">
<div id="alert-msg" class="alert-msg">sdf</div>
    <div class="panel-heading">
        <p>Student Grievance Form</p>    
    </div>
    <!-- action=".\application\addGrievance.php" -->
    <form id="grievance-form" name="grievanceForm">
    <div class="section">
        <div class="details-head">
            <p>Personal Details</p>
        </div>  

        <div class="input-container">
                
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="studentname" id="name" placeholder="Enter Full Name" required>
                </div>

                <div class="form-group">
                    <label for="mailid">E-mail ID</label>
                    <input type="text" class="form-control" id="mailid" name="email" placeholder="Name" required>
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="gender">Gender</label>
                        <select id="gender" class="form-control" name="gender" placeholder="Enter Gender" aria-required="true" aria-invalid="true" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>                                                                                                                                                                                                                                               


                </div>

                <div class="form-group">
                    <label for="mobileno">Mobile no</label>
                    <input type="text" class="form-control" id="mobile no" name="mobileno" placeholder="Enter mobile no" required>
                </div>
                <div class="form-group">
                    <label for="enrollment no">Enrollmment No</label>
                    <input type="text" class="form-control" id="enrollment no" name="enrollmentno" placeholder="Enter mobile no" required>
                </div>

                <div class="form-group">
                    <label for="enrollment no">Regional Center</label>
                    <select name="regionalcenter" class="form-control" required>
                        <option selected="selected" value="Select Regional Centre">Select Regional Centre</option>
                        <option value="Agartala">Agartala</option>
                        <option value="RC Ahmadabad">RC Ahmadabad</option>
                        <option value="Aizwal">Aizwal</option>
                        <option value="Aligarh">Aligarh</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="Bhagalpur">Bhagalpur</option>
                        <option value="Bhopal">Bhopal</option>
                        <option value="Bhubaneswar">Bhubaneswar</option>
                        <option value="Bijapur">Bijapur</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Cochin">Cochin</option>
                        <option value="Darbhanga">Darbhanga</option>
                        <option value="Dehradun">Dehradun</option>
                        <option value="Delhi-1">Delhi-1</option>
                        <option value="Delhi-2">Delhi-2</option>
                        <option value="Delhi-3">Delhi-3</option>
                        <option value="Deoghar">Deoghar</option>
                        <option value="Gangtok">Gangtok</option>
                        <option value="Guwahati">Guwahati</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Imphal">Imphal</option>
                        <option value="Itanagar">Itanagar</option>
                        <option value="Jabalpur">Jabalpur</option>
                        <option value="Jaipur">Jaipur</option>
                        <option value="Jammu">Jammu</option>
                        <option value="Jodhpur">Jodhpur</option>
                        <option value="Jorhat">Jorhat</option>
                        <option value="Karnal">Karnal</option>
                        <option value="Khanna">Khanna</option>
                        <option value="Kohima">Kohima</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Koraput">Koraput</option>
                        <option value="Lucknow">Lucknow</option>
                        <option value="Madurai">Madurai</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Nagpur">Nagpur</option>
                        <option value="NOIDA">NOIDA</option>
                        <option value="Panaji">Panaji</option>
                        <option value="Patna">Patna</option>
                        <option value="Port">Port Blair</option>
                        <option value="Pune">Pune</option>
                        <option value="Raghunathganj">Raghunathganj</option>
                        <option value="Raipur">Raipur</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Ranchi">Ranchi</option>
                        <option value="Saharsa">Saharsa</option>
                        <option value="Shillong">Shillong</option>
                        <option value="Shimla">Shimla</option>
                        <option value="Siliguri">Siliguri</option>
                        <option value="Srinagar">Srinagar</option>
                        <option value="Trivendrum">Trivendrum</option>
                        <option value="Varanasi">Varanasi</option>
                        <option value="Vatakara">Vatakara</option>
                        <option value="Vijayawada">Vijayawada</option>
                        <option value="Vishakhapatnam">Vishakhapatnam</option>
                        <option value="REC Ahmadabad">REC Ahmadabad</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="enrollment no">Programme</label>
                        <select name="programme" id="Programme" class="form-control" required>
                            <option selected="selected" value="0">Select Programme</option>
                            <option value="ACE">ACE</option>
                            <option value="ACISE">ACISE</option>
                            <option value="ACPDM">ACPDM</option>
                            <option value="ACPSD">ACPSD</option>
                            <option value="APDF">APDF</option>
                            <option value="APVPFV">APVPFV</option>
                            <option value="BA">BA</option>
                            <option value="BAECH">BAECH</option>
                            <option value="BAEGH">BAEGH</option>
                            <option value="BAG">BAG</option>
                            <option value="BAHDH">BAHDH</option>
                            <option value="BAHIH">BAHIH)</option>
                            <option value="BAPAH">BAPAH</option>
                            <option value="BAPCH">BAPCH</option>
                            <option value="BAPFHMH">BAPFHMH</option>
                            <option value="BAPSH">BAPSH</option>
                            <option value="BASOH">BASOH</option>
                            <option value="BAVTM">BAVTM</option>
                            <option value="BBASM">BBASM</option>
                            <option value="BBRL">BBRL</option>
                            <option value="BCA">BCA</option>
                            <option value="BCOM">BCOM</option>
                            <option value="BCOMAF">BCOMAF</option>
                            <option value="BCOMCAA">BCOMCAA</option>
                            <option value="BCOMFCA">BCOMFCA</option>
                            <option value="BCOMG">BCOMG</option>
                            <option value="BED">BED</option>
                            <option value="BHM">BHM</option>
                            <option value="BLIS">BLIS</option>
                            <option value="BPCCHN">BPCCHN</option>
                            <option value="BPP">BPP</option>
                            <option value="BSC">BSC</option>
                            <option value="BSCANH">BSCANH</option>
                            <option value="BSCBCH">BSCBCH</option>
                            <option value="BSCG">BSCG</option>
                            <option value="BSCN">BSCN</option>
                            <option value="BSW">BSW</option>
                            <option value="BSWG">BSWG</option>
                            <option value="BTME">BTME</option>
                            <option value="BTS">BTS</option>
                            <option value="CAFE">CAFE</option>
                            <option value="CAHC">CAHC</option>
                            <option value="CAHT">CAHT</option>
                            <option value="CAL">CAL</option>
                            <option value="CBS">CBS</option>
                            <option value="CCITSK">CCITSK</option>
                            <option value="CCLBL">CCLBL</option>
                            <option value="CCP">CCP</option>
                            <option value="CCPD">CCPD</option>
                            <option value="CCR">CCR</option>
                            <option value="CDM">CDM</option>
                            <option value="CES">CES</option>
                            <option value="CETE">CETE</option>
                            <option value="CETM">CETM</option>
                            <option value="CFAID">CFAID</option>
                            <option value="CFE">CFE</option>
                            <option value="CFL">CFL</option>
                            <option value="CFN">CFN</option>
                            <option value="CGL">CGL</option>
                            <option value="CHBHC">CHBHC</option>
                            <option value="CHCWM">CHCWM</option>
                            <option value="CHR">CHR</option>
                            <option value="CIAP">CIAP</option>
                            <option value="CIB">CIB</option>
                            <option value="CIG">CIG</option>
                            <option value="CIHL">CIHL</option>
                            <option value="CIPMT">CIPMT</option>
                            <option value="CIS">CIS</option>
                            <option value="CIT">CIT</option>
                            <option value="CLIS">CLIS</option>
                            <option value="CLP">CLP</option>
                            <option value="CMAD">CMAD</option>
                            <option value="CMCHN">CMCHN</option>
                            <option value="CMSR">CMSR</option>
                            <option value="CNCC">CNCC</option>
                            <option value="CNIN">CNIN</option>
                            <option value="CNM">CNM</option>
                            <option value="COF">COF</option>
                            <option value="CPABN">CPABN</option>
                            <option value="CPAHM">CPAHM</option>
                            <option value="CPAKM">CPAKM</option>
                            <option value="CPATHA">CPATHA</option>
                            <option value="CPEL">CPEL</option>
                            <option value="CPF">CPF</option>
                            <option value="CPHA">CPHA</option>
                            <option value="CPLT">CPLT</option>
                            <option value="CPPDPT">CPPDPT</option>
                            <option value="CPSCM">CPSCM</option>
                            <option value="CPVE">CPVE</option>
                            <option value="CPY">CPY</option>
                            <option value="CRD">CRD</option>
                            <option value="CSLC">CSLC</option>
                            <option value="CSWCJS">CSWCJS</option>
                            <option value="CTE">CTE</option>
                            <option value="CTPM">CTPM</option>
                            <option value="CTRBS">CTRBS</option>
                            <option value="CTS">CTS</option>
                            <option value="CUL">CUL</option>
                            <option value="CVAA">CVAA</option>
                            <option value="CVAP">CVAP</option>
                            <option value="CWHM">CWHM</option>
                            <option value="DAFE">DAFE</option>
                            <option value="DAQ">DAQ</option>
                            <option value="DBPOFA">DBPOFA</option>
                            <option value="DCCN">DCCN</option>
                            <option value="DCE">DCE</option>
                            <option value="DDT">DDT</option>
                            <option value="DECE">DECE</option>
                            <option value="DELED">DELED</option>
                            <option value="DFPT">DFPT</option>
                            <option value="DIPP">DIPP</option>
                            <option value="DIR">DIR</option>
                            <option value="DMOP">DMOP</option>
                            <option value="DMT">DMT</option>
                            <option value="DNA">DNA</option>
                            <option value="DNHE">DNHE</option>
                            <option value="DPE">DPE</option>
                            <option value="DPLAD">DPLAD</option>
                            <option value="DPVCPO">DPVCPO</option>
                            <option value="DPVE">DPVE</option>
                            <option value="DTS">DTS</option>
                            <option value="DUL">DUL</option>
                            <option value="DVAPFV">DVAPFV</option>
                            <option value="DWED">DWED</option>
                            <option value="DWM">DWM</option>
                            <option value="MAAE">MAAE</option>
                            <option value="MAAN">MAAN</option>
                            <option value="MADE">MADE</option>
                            <option value="MADP">MADP</option>
                            <option value="MADVS">MADVS</option>
                            <option value="MAEDS">MAEDS</option>
                            <option value="MAEDU">MAEDU</option>
                            <option value="MAFCS">MAFCS</option>
                            <option value="MAGD">MAGD</option>
                            <option value="MAH">MAH</option>
                            <option value="MAJMC">MAJMC</option>
                            <option value="MAJY">MAJY</option>
                            <option value="MAPC">MAPC</option>
                            <option value="MAPY">MAPY</option>
                            <option value="MARD">MARD</option>
                            <option value="MATS">MATS</option>
                            <option value="MAUD">MAUD</option>
                            <option value="MAWGS">MAWGS</option>
                            <option value="MBA">MBA</option>
                            <option value="MBF">MBF</option>
                            <option value="MCA">MCA</option>
                            <option value="MCA_NEW">MCA_NEW</option>
                            <option value="MCOM">MCOM</option>
                            <option value="MCOMBPCG">MCOMBPCG</option>
                            <option value="MCOMFT">MCOMFT</option>
                            <option value="MCOMMAFS">MCOMMAFS</option>
                            <option value="MEC">MEC</option>
                            <option value="MED">MED</option>
                            <option value="MEG">MEG</option>
                            <option value="MGPS">MGPS</option>
                            <option value="MHA">MHA</option>
                            <option value="MHD">MHD</option>
                            <option value="MLIS">MLIS</option>
                            <option value="MP">MP</option>
                            <option value="MPA">MPA</option>
                            <option value="MPB">MPB</option>
                            <option value="MPHILCOM">MPHILCOM</option>
                            <option value="MPHILDE">MPHILDE</option>
                            <option value="MPHILEC">MPHILEC</option>
                            <option value="MPHILGDS">MPHILGDS</option>
                            <option value="MPHILPA">MPHILPA</option>
                            <option value="MPHILPS">MPHILPS</option>
                            <option value="MPHILSO">MPHILSO</option>
                            <option value="MPHILSW">MPHILSW</option>
                            <option value="MPHILTH">MPHILTH</option>
                            <option value="MPHILTT">MPHILTT</option>
                            <option value="MPS">MPS</option>
                            <option value="MSCCFT">MSCCFT</option>
                            <option value="MSCDFSM">MSCDFSM</option>
                            <option value="MSCENV">MSCENV</option>
                            <option value="MSCIS">MSCIS</option>
                            <option value="MSCMACS">MSCMACS</option>
                            <option value="MSK">MSK</option>
                            <option value="MSO">MSO</option>
                            <option value="MSW">MSW</option>
                            <option value="MSWC">MSWC</option>
                            <option value="MTTM">MTTM</option>
                            <option value="PDCDM">PDCDM</option>
                            <option value="PGCAE">PGCAE</option>
                            <option value="PGCAP">PGCAP</option>
                            <option value="PGCBHT">PGCBHT</option>
                            <option value="PGCCC">PGCCC</option>
                            <option value="PGCCL">PGCCL</option>
                            <option value="PGCEDS">PGCEDS</option>
                            <option value="PGCGI">PGCGI</option>
                            <option value="PGCGPS">PGCGPS</option>
                            <option value="PGCIATIVI">PGCIATIVI</option>
                            <option value="PGCINDS">PGCINDS</option>
                            <option value="PGCMDM">PGCMDM</option>
                            <option value="PGCMHT">PGCMHT</option>
                            <option value="PGCPP">PGCPP</option>
                            <option value="PGDAC">PGDAC</option>
                            <option value="PGDAE">PGDAE </option>
                            <option value="PGDAPP">PGDAPP</option>
                            <option value="PGDAST">PGDAST</option>
                            <option value="PGDAW">PGDAW</option>
                            <option value="PGDBE">PGDBE</option>
                            <option value="PGDBP">PGDBP</option>
                            <option value="PGDCA">PGDCA</option>
                            <option value="PGDCC">PGDCC</option>
                            <option value="PGDCFT">PGDCFT</option>
                            <option value="PGDCJ">PGDCJ</option>
                            <option value="PGDCSR">PGDCSR</option>
                            <option value="PGDDC">PGDDC</option>
                            <option value="PGDDM">PGDDM</option>
                            <option value="PGDDVS">PGDDVS</option>
                            <option value="PGDEDS">PGDEDS</option>
                            <option value="PGDEMA">PGDEMA</option>
                            <option value="PGDESD">PGDESD</option>
                            <option value="PGDET">PGDET</option>
                            <option value="PGDFCS">PGDFCS</option>
                            <option value="PGDFM">PGDFM</option>
                            <option value="PGDFMP">PGDFMP</option>
                            <option value="PGDFSQM">PGDFSQM</option>
                            <option value="PGDGM">PGDGM</option>
                            <option value="PGDGPS">PGDGPS</option>
                            <option value="PGDHE">PGDHE</option>
                            <option value="PGDHHM">PGDHHM</option>
                            <option value="PGDHIVM">PGDHIVM</option>
                            <option value="PGDHRM">PGDHRM</option>
                            <option value="PGDIBO">PGDIBO</option>
                            <option value="PGDIDM">PGDIDM</option>
                            <option value="PGDIPR">PGDIPR</option>
                            <option value="PGDIS">PGDIS</option>
                            <option value="PGDLAN">PGDLAN</option>
                            <option value="PGDMCH">PGDMCH</option>
                            <option value="PGDMH">PGDMH</option>
                            <option value="PGDMM">PGDMM</option>
                            <option value="PGDOM">PGDOM</option>
                            <option value="PGDPM">PGDPM</option>
                            <option value="PGDPPED">PGDPPED</option>
                            <option value="PGDPSM">PGDPSM</option>
                            <option value="PGDRD">PGDRD</option>
                            <option value="PGDSLM">PGDSLM</option>
                            <option value="PGDSS">PGDSS (Online)</option>
                            <option value="PGDT">PGDT</option>
                            <option value="PGDTRM">PGDTRM</option>
                            <option value="PGDUPDL">PGDUPDL</option>
                            <option value="PGDWGS">PGDWGS</option>
                            <option value="PGJMC">PGJMC</option>
                            <option value="PHDAGE">PHDAGE</option>
                            <option value="PHDAL">PHDAL</option>
                            <option value="PHDBC">PHDBC</option>
                            <option value="PHDCDEV">PHDCDEV</option>
                            <option value="PHDCENG">PHDCENG</option>
                            <option value="PHDCHE">PHDCHE</option>
                            <option value="PHDCISC">PHDCISC</option>
                            <option value="PHDCOM">PHDCOM</option>
                            <option value="PHDDE">PHDDE</option>
                            <option value="PHDDR">PHDDR</option>
                            <option value="PHDEC">PHDEC</option>
                            <option value="PHDEDS">PHDEDS</option>
                            <option value="PHDEDU">PHDEDU</option>
                            <option value="PHDENG">PHDENG</option>
                            <option value="PHDFL">PHDFL</option>
                            <option value="PHDFN">PHDFN</option>
                            <option value="PHDGDS">PHDGDS</option>
                            <option value="PHDGDS">PHDGDS</option>
                            <option value="PHDGG">PHDGG</option>
                            <option value="PHDGY">PHDGY</option>
                            <option value="PHDHIN">PHDHIN</option>
                            <option value="PHDHIS">PHDHIS</option>
                            <option value="PHDITS">PHDITS</option>
                            <option value="PHDJMC">PHDJMC</option>
                            <option value="PHDLAW">PHDLAW</option>
                            <option value="PHDLIS">PHDLIS</option>
                            <option value="PHDLS">PHDLS</option>
                            <option value="PHDMECE">PHDMECE</option>
                            <option value="PHDMGMT">PHDMGMT</option>
                            <option value="PHDMT">PHDMT</option>
                            <option value="PHDNUR">PHDNUR</option>
                            <option value="PHDPA">PHDPA</option>
                            <option value="PHDPC">PHDPC</option>
                            <option value="PHDPH">PHDPH</option>
                            <option value="PHDPS">PHDPS</option>
                            <option value="PHDPVA">PHDPVA</option>
                            <option value="PHDRD">PHDRD</option>
                            <option value="PHDSOC">PHDSOC</option>
                            <option value="PHDSW">PHDSW</option>
                            <option value="PHDTS">PHDTS</option>
                            <option value="PHDTT">PHDTT</option>
                            <option value="PHDVED">PHDVED</option>
                            <option value="PHDWS">PHDWS</option>
                            <option value="SSB">SSB</option>

                        </select>
                    
                </div>
                
        </div>


    </div>
    
    <div class="section">
        <div class="details-head">
            <p>Present Address</p>
        </div>    
        <div class="input-container">
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" name="address" class="form-control" id="Address" placeholder="Enter Address" required>
                </div>

                <div class="form-group">
                    <label for="State">State</label>
                    <select name="state" id="state" class="form-control" required>
                                                                
                    </select>
                </div>
                
                
                <div class="form-group">
                    <label for="mobileno">City</label>
                    <select name="city" id="city" class="form-control" required>
                                                                
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="pincode">PIN code</label>
                    <input type="text" name="pincode" class="form-control" id="pincode" placeholder="Enter PIN code" required>
                </div>
                
        
        </div>
            

    </div>

    <div class="section">
        <div class="details-head">
            <p>Grievance Details</p>
        </div>    
        <div class="input-container">
                <div class="form-group">
                    <label for="grievance">Grievance Category</label>
                    <select name="grievancecategory" id="grievancecategory" class="form-control" required>
                    <option selected="selected" value="Select grievance" >Select Grievance</option>
                        <?php

                            $sql= "SELECT DISTINCT category FROM grievancetype";
                             if($result=mysqli_query($link,$sql))
                             {
                                if(mysqli_num_rows($result) > 0){
                         
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                                       
                                     }

                                     
                                }
                             }
                             else{
                                 echo mysqli_error($link);
                             }
                             
                        ?>
                    

                    </select>
                </div>
                
                <div class="form-group">
                    <label for="grievancename">Grievance related to</label>
                    <select name="grievancename" id="relatedgrievance" class="form-control" required>
                    
                                
                    </select>
                </div>


            </div>  
            <div class="form-group" style="padding: 20px;">
                        <label for="">Grievance Discription</label>
                        <textarea name="grievancediscription" class="form-control" id="Grievance discription" rows="4" required></textarea>
            </div>
                  


    </div>
    <div class="section">
        <div class="details-head">
            <p>Proposed Solution</p>
        </div>    
            
        <div class="form-group" style="padding: 20px;">
                        <label for="">Proposed Solution (maximum 50 words)</label>
                        <textarea name="solution" class="form-control" id="Grievance discription" rows="4" required></textarea>
            </div>
    </div>

    <div class="section">
        <div class="details-head">
            <p>Declaration</p>
        </div>    
            
        <div class="form-group" style="padding: 20px;">
                        <label for="">I hereby declare that the information/document provided above is correct. I shall be responsible for furnishing any wrong information/document.</label>
                        <br><br><input type="checkbox" name="declaration" id="declaration" required>
                        
                        Please check the box
            </div>
    </div>
 
    <div class="form-group" style="padding: 20px;">
    <!-- <button  class="btn btn-primary" id="sa-btn">Submit</button>     -->
    <button type="submit" class="btn btn-primary" id="save-btn">Submit</button>
    
    </div>
 

</div>
</form>

    
    


<div class="footer">
    <div class="container">
    <h6>© IGNOU University 2022 All Rights Reserved.</h6>
<h6></h6>

    </div>

</div>

    <!-- <div class="col md-10 m-auto">
        sdfsdfds

    </div>



 -->

 <script src="script.js"></script>

</body>
</html>