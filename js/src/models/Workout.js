define([
  'jquery',
  'underscore',
  'backbone',
  'url-consts'
], function($, _, Backbone, UrlCons){
    var Workout = Backbone.Model.extend({
        idAttribute: '_id',
        
        defaults: {
            '_id' : null,
            'name' : null
        },
        
        urlRoot: UrlCons.API.ROOT_API + "workout"
    });
    
    return Workout;
});