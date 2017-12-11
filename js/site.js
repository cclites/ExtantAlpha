/*
 * site.js - main js file
 *
 * EXTANT::ALPHA v.0.1
 * Copyright: Extant Digial LLC
 */

var site = {
	
	initClickListeners: function(){
		
		$(".cta").click(function(){	
			window.scrollTo(0,document.body.scrollHeight);
		});
		
		
		$(".submitMessage").click(function(){
			site.submitMessage();
		});
	},
	
	initMessageSubmit: function(){
		
		$(".contactName, .contactEmail, textarea.contactMessage").keyup(function(){

			if( site.enableMessageSubmit() ){
				console.log("Submitting the message");
			}else{
				console.log("Cannot submit");
			}
		});
	},
	
	enableMessageSubmit: function(){
		
		if( $(".contactName").val() === "" || $(".contactEmail").val() === "" || $("textarea.contactMessage").val() === "" ){
			$(".submitMessage").attr("disabled", "disabled");
			return false;
		}else{
			$(".submitMessage").attr("disabled", false);
			return true;
		}
	},
	
		
	submitMessage: function(){

		var data = {
			'name' : $(".contactName").val(),
			'email' : $(".contactEmail").val(),
			'message' : $(".contactMessage").val(),
		};

		var request = new site.requestObject('app/Mail.php', 'POST', callbacks.sendMailSuccess, callbacks.sendMessageFailure, data);
		site.asynch(request);
	},
	
	getLocation:function () {
	    if (navigator.geolocation) {
	        navigator.geolocation.getCurrentPosition(site.getWeather);
	    } else {
	        console.log("Geolocation is not supported by this browser.");
	    }
	},
	
	asynch: function(request) {
	
            var typeFlag = request.type;

            $.ajax({
                    type : typeFlag,
                    url : request.url,
                    success : request.success,
                    error : request.failure,
                    data : request.data,
                    //dataType : "json",
                    statusCode : {
                            404 : function(xhr, type, exception) {
                                    console.log("404 error");
                            },
                            400 : function(xhr, type, exception) {
                                    console.log("400 error");
                            },
                            410 : function(xhr, type, exception) {
                                    console.log("410 error");
                            },
                            500 : function(xhr, type, exception) {
                                    console.log("500 error");
                            }
                    }
            }).always(function(data) {
            	//console.log("always " + data);
            });
    },
	
    requestObject: function(url, type, success, failure, data) {
            this.url = url;
            this.type = type;
            this.success = success;
            this.failure = failure;
            this.data = data;
            
            return this;
    },
	
};

var callbacks = {
	
	sendMailSuccess: function(data){
		
		if(data.status == 1){
			alert("Message has been sent.");
			location.reload();
		}else{
			alert("Unable to send your message right now. Please try again later");
		}
	},
	
	sendMailFailure: function(a,b,c){
		alert("Send mail failure");
	},
};


$(function() {
    
    site.initClickListeners();
    site.initMessageSubmit();
});