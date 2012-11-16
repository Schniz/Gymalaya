// Filename: app.js

define([
  // These are path alias that we configured in our bootstrap
  'jquery',
  'underscore',
  'backbone',
  'views/MainPageView'
], function($, _, Backbone, MainPageView){
  // Above we have passed in jQuery, Underscore and Backbone
  // They will not be accessible in the global scope
	
	  var Router = Backbone.Router.extend({
	      mainPage : new MainPageView,
		  routes : {
			  "" : "main",
			  "last/:query" : "main"
		  },
	  
	  	  help : function() {
	  		  alert("HELP!!!");
	  	  },
		  
		  main : function(last) {
		      console.log("MAIN");
		  }
	  });
	  
	  function initialize(activeSession) {
		  var router = new Router;
		  window.MainPage = router.mainPage;
		  Backbone.history.start();
	  }
	  
	  return { initialize: initialize };
  // What we return here will be used by other modules
});