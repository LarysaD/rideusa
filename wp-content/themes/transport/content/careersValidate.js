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
}, "Uploaded file size exceded.");

$.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 9 && 
    phone_number.match(/^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
}, "Please specify a valid phone number");

$.validator.addMethod("extension",function(a,b,c){
    return c="string"==typeof c?c.replace(/,/g,"|"):"png|jpe?g|gif" ,this.optional(b)||a.match(new RegExp("\\.("+c+")$","i"))
}, "Wrong extension.");

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
    			filesize: 8388608, 
                extension: "pdf|doc|docx|rtf"
    		},
    		uploadDrivingRecord: {
    			required: true,
    			filesize: 8388608 , 
                extension: "pdf|doc|docx|rtf"
    		},
    		contactPreviousSupervisor: {
    			required: true
    		}


    	}, 
        messages:{
            uploadResume: {
                required: "Field required", 
                filesize: "Uploaded file size exceded", 
                extension: "Wrong extension"
            },
            uploadDrivingRecord: {
                required: "Field required",
                filesize: "Uploaded file size exceded" , 
                extension: "Wrong extension"
            }
        }
    });
 });

// Custom input file

// Span
var span = document.getElementsByClassName('upload-path');
var uploadFileName = document.getElementById("uploadFileName");
var uploadDrivingFileName = document.getElementById("uploadDrivingFileName");
// Button
var uploader = document.getElementsByName('uploadDrivingRecord');
var resume = document.getElementsByName('uploadResume');

// On change Upload Driving
for( item in uploader ) {
  // Detect changes
  uploader[item].onchange = function() {
    // Echo filename in span
    uploadDrivingFileName.innerHTML = this.files[0].name;
  }

}
for( file in resume ) {
  // Detect changes
  resume[file].onchange = function() {
    // Echo filename in span
    uploadFileName.innerHTML = this.files[0].name;
  }
 
}

