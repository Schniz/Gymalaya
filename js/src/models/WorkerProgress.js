define([
  'jquery',
  'underscore',
  'backbone',
  'url-consts'
], function($, _, Backbone, UrlCons){
    var WorkerProgress = Backbone.Model.extend({
        idAttribute: 'id',
        
        defaults: {
            'id' : null,
            'workerid' : null,
            'currentdate' : null,
            'weight' : null,
            'picture' : null,
            'armsize' : null,
            'heapsize' : null,
            'asssize' : null,
            'fatprecent' : null
        },
        
        urlRoot: UrlCons.API.ROOT_API + "workerprogress",
    });
    
    return WorkerProgress;
});