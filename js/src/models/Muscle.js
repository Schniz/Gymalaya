define([
  'jquery',
  'underscore',
  'backbone',
  'url-consts'
], function($, _, Backbone, UrlCons){
    var Muscle = Backbone.Model.extend({
        idAttribute: 'id',
        
        defaults: {
            'id' : null,
            'name' : null,
            'bodyarea' : null,
            'bodypart' : null
        },
        
        urlRoot: UrlCons.API.ROOT_API + "muscle"
    });
    
    return Muscle;
});