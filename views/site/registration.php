<?php
$this->registerJsFile('@web/js/otp.js');
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'OTP';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4" id="otp">
	<br />							
	<form id="otpform">	
            <table class="table table-striped success">
		<tr>
                    <td>
                        <font color="black"><b>Enter your Email / Mobile No:</b></font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" id="otpemail" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" id="submit_email" class="btn" value="Send me OTP">
                    </td>
		</tr>							
            </table>
	</form>
	<span id="next_otp">
            <span style="color: #F00">Email sent. Check for OTP code which will be valid for 5 mins.</span>
            <form id="otpcodeform">
		<table class="table table-striped">
                    <tr class="warning">
                        <td>
                            <font color="black"><b>OTP Code :</b></font>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" id="otpcode_check" name="otpcode_check" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" id="otp_code" class="btn" value="Verify OTP">
                        </td>
                    </tr>
		</table>
            </form>	
	</span>
    </div>
    <div class="span12" id="myviewer">
	<div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">User Registration</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Name" id="Name" class="form-control input-sm" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Company BRN" id="Company_BRN" class="form-control input-sm" placeholder="Company BRN">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="DOB" id="DOB" class="form-control input-sm" placeholder="DOB">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Company Name" id="Company_Name" class="form-control input-sm" placeholder="Company Name">
                                            </div>
                                        </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Citizenship" id="Citizenship" class="form-control input-sm" placeholder="Citizenship">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Company URL" id="Company_URL" class="form-control input-sm" placeholder="Company URL">
                                            </div>
                                        </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="NRIC_FIN" id="NRIC_FIN" class="form-control input-sm" placeholder="NRIC_FIN">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Company General Email" id="Company_General_Email" class="form-control input-sm" placeholder="Company General Email">
                                            </div>
                                        </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Passport" id="Passport" class="form-control input-sm" placeholder="Passport">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="General Contact" id="General_Contact" class="form-control input-sm" placeholder="General_Contact">
                                            </div>
                                        </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="WP_SP_EP" id="WP_SP_EP" class="form-control input-sm" placeholder="WP_SP_EP">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Fax" id="Fax" class="form-control input-sm" placeholder="Fax">
                                            </div>
                                        </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Email" id="Email" class="form-control input-sm" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Name" id="Name" class="form-control input-sm" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Mobile" id="Mobile" class="form-control input-sm" placeholder="Mobile">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Company Rep Designation" id="Company_Rep_Designation" class="form-control input-sm" placeholder="Company Rep Designation">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Address Line1" id="Address_Line1" class="form-control input-sm" placeholder="Address Line1">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Email" id="Email" class="form-control input-sm" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Address Line2" id="Address_Line2" class="form-control input-sm" placeholder="Address Line2">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Contact" id="Contact" class="form-control input-sm" placeholder="Contact">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Address Portal" id="Address_Portal" class="form-control input-sm" placeholder="Address Portal">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Contact Ext" id="Contact_Ext" class="form-control input-sm" placeholder="Contact Ext">
                                    </div>
                                </div>

                                                <input type="submit" value="Register" class="btn btn-info btn-block">
                                            </div>
                                                                            </form>

                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
<script>document.getElementById('myviewer').style.display = "none";</script>