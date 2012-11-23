define([
  'jquery',
  'underscore',
  'backbone',
  'url-consts'
], function($, _, Backbone, UrlCons){
    var Machine = Backbone.Model.extend({
        idAttribute: 'id',
        
        defaults: {
            'id' : null,
            'name' : null
        },
        
        urlRoot: UrlCons.API.ROOT_API + "machine"
    });
    
    return Machine;
});