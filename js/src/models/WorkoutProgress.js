define([
  'jquery',
  'underscore',
  'backbone',
  'url-consts'
], function($, _, Backbone, UrlCons){
    var WorkoutProgress = Backbone.Model.extend({
        idAttribute: '_id',
        
        defaults: {
            '_id' : null,
            'workout' : null,
            'exercise' : null,
            'datecomplete' : null,
            'weight' : null,
            'repeats' : null,
            'sets' : null,
            'worker' : null
        },
        
        urlRoot: UrlCons.API.ROOT_API + "workoutprogress"
    });
    
    return WorkoutProgress;
});