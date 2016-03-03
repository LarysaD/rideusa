// JQuery Validation for Application form from Careers Page

jQuery(document).ready(function( $ ) {




    // add the rule here
$.validator.addMethod("valueNotEquals", function(value, element, arg){
  return arg != value;
 }, "Value must not equal arg.");
 	// input file size limit
$.validator.addMethod('filesize', function(value, element, param) {
    // param = size (in bytes) 
    // element = element to validate (<input>)
    // value = value of the element (file name)
    return this.optional(element) || (element.files[0].size <= param) 
});

$.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 9 && 
    phone_number.match(/^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
}, "Please specify a valid phone number");

$.validator.addMethod('positiveNumber',
    function (value) { 
        return Number(value) > 0;
    }, 'Enter a positive number.');


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
    			required: true,
    			phoneUS: true,
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
    			required: true,
    			positiveNumber: true
    		},
    		desiredSalary: {
    			required: true,
    			positiveNumber: true
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
    			required: true,
    			positiveNumber: true
    		},
    		endingSalary: {
    			required: true,
    			positiveNumber: true
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
    			required: true, 
    			filesize: 8388608 
    		},
    		uploadDrivingRecord: {
    			required: true,
    			filesize: 8388608 
    		},
    		contactPreviousSupervisor: {
    			required: true
    		}


    	}
    });
 });

// Custom input file

// Span
var span = document.getElementsByClassName('upload-path');
// Button
var uploader = document.getElementsByName('uploadDrivingRecord');
// On change
for( item in uploader ) {
  // Detect changes
  uploader[item].onchange = function() {
    // Echo filename in span
    span[0].innerHTML = this.files[0].name;
  }
}
