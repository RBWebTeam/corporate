<div class="card-main">
                        <div class="card-inner">
                            <form class="form mt3" id="eligibilityForm">
                                <fieldset>
                                    <div class="form-group form-group-label mt0 ft14">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="float-text" class="floating-label fw300 ft14">Your Monthly Salary</label>
                                                <input type="text" id="salary" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-label control-highlight">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="float-select" class="floating-label">Loan Repayment Time (in years)</label>
                                                <select id="tenure" class="form-control">
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-label mt0 ft14">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="float-text" class="floating-label fw300 ft14">Interest Rate Offered (Annual %)</label>
                                                <input type="text" id="roi" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-label mt0 control-highlight">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="float-text" class="floating-label fw300 ft14">Monthly EMI you are currently paying</label>
                                                <input type="text" id="emi" class="form-control" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="card cream-background opensans">
                                    <div class="card-main">
                                        <div class="card-inner">
                                            <p class="card-heading ft14 fw700 mt1 mb1">Your Eligibility</p>
                                            <p id="eligible" class="ft12 fw400 mt0">
                                                Enter your Monthly Salary, Tenure, Interest Rate and your Monthly EMI to 
                                                calculate your <strong>Loan Amount Eligibility</strong>
                                            </p>
                                        </div>
                                        <div class="card-action py1 px2" id="eligibility-result" style="display:none">
                                            <a href="https://cashkumar.com/personal-loan" class="btn btn-green white ft12">Apply for a Personal Loan in 37 seconds</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-btn">
                                    <button type="button" class="btn btn-blue ft14 mt0 waves-button waves-light waves-effect" onclick="showEligibility()">Check Eligibility</button><button type="button" class="btn btn-red ft14 waves-button waves-effect mt0" onclick="resetForm()">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script type="text/javascript">$(document).ready(function(){var scrollwidth=$('.current').width();$('.pure-menu').animate({scrollLeft:scrollwidth*3+'px'},800);});function resetForm(){$('#eligibilityForm')[0].reset();$('#eligible').html('Enter your Monthly Salary, Tenure, Interest Rate and your Monthly EMI to calculate your <strong>Loan Amount Eligibility</strong>');$('#eligibility-result').hide();}function showEligibility(){if($("#salary").val()<15000){$("#eligible").html("You are not eligible for a loan.<br>Your salary should be atleast <strong>Rs. 15000</strong>");}else{if(isNaN($("#roi").val())||$("#roi").val()==""||isNaN($("#tenure").val())||$("#tenure").val()==""||isNaN($("#emi").val())||$("#emi").val()==""){$("#eligible").html("Please check what you have entered!");return false;}p=100000;r=$("#roi").val()/100;n=$("#tenure").val()*12;if(p>0&&n!=0){l=1/12;i=r*l;permissible_emi=($("#salary").val()*.40)-$("#emi").val();eligible_amount=permissible_emi*(1-Math.pow((1+i),-1*n))/i;if(eligible_amount<0||permissible_emi<0){eligible_amount=0;permissible_emi=0;$("#eligible").html("You are not eligible for this loan at <strong>"+$("#roi").val()+"%</strong> Interest Rate and <strong>"+$("#tenure").val()+"</strong> year tenure.");$('#eligibility-result').show();return false;}$('#eligible').html('Additional EMI that you can pay: <strong class="ft14 dark-green">Rs. '+indianFormat(parseInt(permissible_emi))+'/-</strong>.<br>Eligible Loan Amount: <strong class="ft14 dark-green">Rs. '+indianFormat(parseInt(eligible_amount))+'/- </strong>');$('#eligibility-result').show();}}}function indianFormat(x){x=x.toString();var lastThree=x.substring(x.length-3);var otherNumbers=x.substring(0,x.length-3);if(otherNumbers!='')lastThree=','+lastThree;var res=otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g,",")+lastThree;return res;}</script>
