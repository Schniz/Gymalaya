// Filename: app.js

define([
  // These are path alias that we configured in our bootstrap
  'jquery',
  'underscore',
  'backbone',
  'backbone-fbauth',
  'src/router',
  'models/Worker',
  'models/Exercise',
  'models/Muscle',
  'models/Workout',
  'models/ExerciseProgressByWorkout'
], function($, _, Backbone, SessionModel, Router, Worker, Exercise, Muscle, Workout, ExerciseProgressByWorkout){
  // Above we have passed in jQuery, Underscore and Backbone
  // They will not be accessible in the global scope
  return {
	  initialize: function() {
		  this.worker = new Worker({'id' : 1});
		  this.worker.fetch();
		  
		  this.exercise = new Exercise({'id' : 1});
		  this.exercise.fetch();
		  
		  this.muscle = new Muscle({'id' : 1});
		  this.muscle.fetch();
		  
		  this.workout = new Workout({'id' : 1});
		  this.workout.fetch();
		  
		  this.exerciseProgressByWorkout = new ExerciseProgressByWorkout({'id' : 1});
		  this.exerciseProgressByWorkout.fetch();
	      this.activeSession = new SessionModel;
		  Router.initialize(this.activeSession);
	  },
	  login : function(){
	  }
  };
  // What we return here will be used by other modules
});