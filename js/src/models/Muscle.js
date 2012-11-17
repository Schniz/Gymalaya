define([
  'jquery',
  'underscore',
  'backbone',
  'url-consts'
], function($, _, Backbone, UrlCons){
    var Muscle = Backbone.Model.extend({
        idAttribute: '_id',
        
        defaults: {
            '_id' : null,
            'bodyarea' : null,
            'name' : null,
            'bodypart' : null
        },
        
        urlRoot: UrlCons.API.ROOT_API + "muscle"
    });
    
    return Muscle;
});