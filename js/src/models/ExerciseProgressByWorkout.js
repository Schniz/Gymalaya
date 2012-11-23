define([
  'jquery',
  'underscore',
  'backbone',
  'url-consts'
], function($, _, Backbone, UrlCons){
    var ExerciseProgressByWorkout = Backbone.Model.extend({
        idAttribute: 'id',
        
        defaults: {
            'id' : null,
            'workout' : null,
            'exercise' : null,
            'datecomplete' : null,
            'weight' : null,
            'repeats' : null,
            'sets' : null
        },
        
        urlRoot: UrlCons.API.ROOT_API + "exerciseprogressbyworkout"
    });
    
    return ExerciseProgressByWorkout;
});