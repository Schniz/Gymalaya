define([
  'jquery',
  'underscore',
  'backbone',
  'url-consts'
], function($, _, Backbone, UrlCons){
    var Worker = Backbone.Model.extend({
        idAttribute: 'id',
        
        defaults: {
            'id' : null,
            'firstname' : null,
            'lastname' : null,
            'startingdate' : null,
            'reason' : null,
            'birthdate' : null
        },
        
        urlRoot: UrlCons.API.ROOT_API + "worker"
    });
    
    return Worker;
});