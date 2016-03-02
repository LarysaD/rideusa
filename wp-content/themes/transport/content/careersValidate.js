// JQuery Validation for Application form from Careers Page

jQuery(document).ready(function( $ ) {
    // add the rule here
	


    // add the rule here
 $.validator.addMethod("valueNotEquals", function(value, element, arg){
  return arg != value;
 }, "Value must not equal arg.");


    $("#careersForm").validate({
    	rules: {
    		fullName: {
    			required: true,
    			minlentgh: 2
    		},
    		dateYear: {
    			 valueNotEquals: "default"
    		},
    		dateMonth: {
    			valueNotEquals: "default"	
    		},
    		dateDay: {
    			valueNotEquals: "default"
    		},
    		adress: {
    			required: true
    		},
    		phone: {
    			required: true
    		},
    		emailAdress: {
    			required: true
    		},
    		dateYearAvailable: {
    			valueNotEquals: "default"	
    		},
    		dateMonthAvailable: {
    			valueNotEquals: "default"
    		},
    		dateDayAvailable: {
    			valueNotEquals: "default"
    		},
    		daysAvailable: {
    			required: true
    		},
    		desiredSalary: {
    			required: true
    		},
    		position: {
    			required: true
    		},
    		usCitizen: {
    			required: true
    		},
    		ifNoCitizen: {
    			required: true
    		},
    		workedBefore: {
    			required: true
    		},
    		ifYes: {
    			required: true
    		},
    		convicted: {
    			required: true
    		},
    		ifConvicted: {
    			required: true
    		},
    		company: {
    			required: true
    		},
    		phonePrevious: {
    			required: true
    		},
    		adressPrevious: {
    			required: true
    		},
    		supervisor: {
    			required: true
    		},
    		jobTitle: {
    			required: true
    		},
    		startingSalary: {
    			required: true
    		},
    		endingSalary: {
    			required: true
    		},
    		responsabilities: {
    			required: true
    		},
    		from: {
    			required: true
    		},
    		to: {
    			required: true
    		},
    		reasonForLeaving: {
    			required: true
    		},
    		uploadResume: {
    			required: true
    		},
    		uploadDrivingRecord: {
    			required: true
    		}


    	}
    });
 });