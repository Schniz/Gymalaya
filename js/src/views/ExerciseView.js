// ExerciseView.js

define([
  'jquery',
  'underscore',
  'backbone',
  'hgn!templates/ExerciseView'
], function($, _, Backbone, ExerciseTemplate){
    var ExerciseView = Backbone.View.extend({
    	el: $("#exerciseView"),
    	
    	initialize: function(){
    		_.bindAll(this, 'render'); // fixes loss of context for 'this' within methods
    		
    	},
    	render: function(){
    		var exerciseData = {
    			'worker' : window.App.worker.toJSON(),
    			'exercise' : window.App.exercise.toJSON(),
    			'muscle' : window.App.muscle.toJSON(),
    			'workout' : window.App.workout.toJSON(),
    			'exerciseProgressByWorkout' : window.App.exerciseProgressByWorkout.toJSON()
    		};
    		
    		var html = ExerciseTemplate(exerciseData);
    		
    		// Compile the template using underscore
    		//var template = _.template($("#exercise").html(), {});
    		// Load the compiled HTML into the Backbone "el"
    		$(this.el).html(html);
    	}
    });
    
    return ExerciseView;
});