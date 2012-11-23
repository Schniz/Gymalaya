define([
  'jquery',
  'underscore',
  'backbone',
  'url-consts'
], function($, _, Backbone, UrlCons){
    var Workout = Backbone.Model.extend({
        idAttribute: 'id',
        
        defaults: {
            'id' : null,
            'name' : null,
            'workerid' : null,
            'exercises' : null
        },
        
        urlRoot: UrlCons.API.ROOT_API + "workout"
    });
    
    return Workout;
});