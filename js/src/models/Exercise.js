define([
  'jquery',
  'underscore',
  'backbone',
  'url-consts'
], function($, _, Backbone, UrlCons){
    var Exercise = Backbone.Model.extend({
        idAttribute: '_id',
        
        defaults: {
            '_id' : null,
            'name' : null,
            'muscles' : null,
            'machine' : null,
            'difficulty' : null,
            'discription' : null,
            'demonstration' : null
        },
        
        urlRoot: UrlCons.API.ROOT_API + "exercise"
    });
    
    return Exercise;
});