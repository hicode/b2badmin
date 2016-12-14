var Lock = function () {

    return {
        //main function to initiate the module
        init: function () {

             $.backstretch([
		        "custom//images/lock/bg/1.jpg",
    		    "custom/images/lock/bg/2.jpg",
    		    "custom//images/lock/bg/3.jpg",
    		    "custom/images/lock/bg/4.jpg",
		        ], {
		          fade: 1000,
		          duration: 8000
		      });
        }

    };

}();