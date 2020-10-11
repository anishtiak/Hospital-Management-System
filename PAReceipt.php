<form id="rendered-form" method="post" action="chooseward.php>">
   <div class="rendered-form">
      <div class="">
         <h1 id="control-7540643"><b><span style="font-size:14.0pt;mso-bidi-font-size:12.0pt;line-height:107%;font-family:
            " times="" new="" roman","serif";mso-fareast-font-family:calibri;mso-fareast-theme-font:="" minor-latin;mso-ansi-language:en-us;mso-fareast-language:en-us;mso-bidi-language:="" ar-sa"="">Patient Admission Receipt</span></b>
         </h1>
      </div>
      <div class="fb-date form-group field-date-1544126260587"><label for="date-1544126260587" class="fb-date-label">Date of Admission</label><input type="date" placeholder="DD/MM/YYYY" class="form-control" name="date-1544126260587" id="date-1544126260587"></div>
      <div class="fb-text form-group field-text-1544126449946"><label for="text-1544126449946" class="fb-text-label">Name :&nbsp;</label><?php echo $_POST['PFName']." ".$_POST['PMName']." ".$_POST['PLName']; ?></div>
      <div class="fb-date form-group field-date-1544126743618"><label for="date-1544126743618" class="fb-date-label">Date of Birth :</label>$PDOB</div>
      <div class="fb-number form-group field-number-1544126803769"><label for="number-1544126803769" class="fb-number-label">Mobile (1)</label>$Mobile1</div>
      <div class="fb-number form-group field-number-1544126879505"><label for="number-1544126879505" class="fb-number-label">Mobile (2)</label>$Mobile2</div>
      <div class="">
         <h1 id="control-5637791">Present Address</h1>
      </div>
      <div class="fb-text form-group field-text-1544126965922"><label for="text-1544126965922" class="fb-text-label">Street No. / Village&nbsp;</label><?php $StreetNo ?></div>
      <div class="fb-text form-group field-text-1544127004160"><label for="text-1544127004160" class="fb-text-label">Street Name&nbsp;</label><?php $StreetName ?></div>
      <div class="fb-text form-group field-text-1544127036953"><label for="text-1544127036953" class="fb-text-label">Area</label><?php $Area ?></div>
      <div class="fb-text form-group field-text-1544127057756"><label for="text-1544127057756" class="fb-text-label">Thana</label><?php $Thana ?></div>
      <div class="fb-text form-group field-text-1544127079202"><label for="text-1544127079202" class="fb-text-label">District</label><?php $Dist ?></div>
      <div class="">
         <h1 id="control-9421575">Permanent Address</h1>
      </div>
      <div class="fb-text form-group field-text-1544127102819"><label for="text-1544127102819" class="fb-text-label">Street No. / Village&nbsp;</label><?php $PStreetNo ?></div>
      <div class="fb-text form-group field-text-1544127117050"><label for="text-1544127117050" class="fb-text-label">Street Name&nbsp;</label><?php $PStreetName ?></div>
      <div class="fb-text form-group field-text-1544127128704"><label for="text-1544127128704" class="fb-text-label">Area</label><?php $PArea ?></div>
      <div class="fb-text form-group field-text-1544127134764"><label for="text-1544127134764" class="fb-text-label">Thana</label><?php $PThana ?></div>
      <div class="fb-text form-group field-text-1544127162052"><label for="text-1544127162052" class="fb-text-label">District</label><?php $PDist ?></div>
      <div class="fb-text form-group field-text-1544127244779"><label for="text-1544127244779" class="fb-text-label">Profession</label><?php $select ?></div>
      <div class="fb-text form-group field-text-1544127280944"><label for="text-1544127280944" class="fb-text-label">Amount Deposited</label><input type="text" class="form-control" name="text-1544127280944" id="text-1544127280944"></div>
      <div class="fb-text form-group field-text-1544127314198"><label for="text-1544127314198" class="fb-text-label">Cabin No.</label><input type="text" class="form-control" name="text-1544127314198" id="text-1544127314198"></div>
      <div class="fb-text form-group field-text-1544127488673"><label for="text-1544127488673" class="fb-text-label">Ward No.</label><input type="text" class="form-control" name="Wid" id="text-1544127488673"></div>
      <div class="fb-text form-group field-text-1544127506977"><label for="text-1544127506977" class="fb-text-label">Bed No.</label><input type="text" class="form-control" name="BId" id="text-1544127506977"></div>
      <div class="fb-text form-group field-text-1544127533037"><label for="text-1544127533037" class="fb-text-label">Signature with date&nbsp;</label><input type="text" class="form-control" name="text-1544127533037" id="text-1544127533037"></div>
      <div class="fb-text form-group field-text-1544127576908"><label for="text-1544127576908" class="fb-text-label">Name of the employee :</label><input type="text" class="form-control" name="text-1544127576908" id="text-1544127576908"></div>
      <div class="fb-text form-group field-text-1544127607816"><label for="text-1544127607816" class="fb-text-label">Designation :</label><input type="text" class="form-control" name="text-1544127607816" id="text-1544127607816"></div>
      <input type="hidden" name="id" id="hiddenField" value="<?php echo $id ?>" />
       <div class="fb-button form-group field-button-1544129516737"><button type="button" name="button-1544129516737" id="button-1544129516737">SUBMIT</button></div>
 
   
   </div>
</form>
