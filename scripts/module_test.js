define(['jquery'], function ($) {
'use strict';
    var myCounter = {
        counter : 0,
        incrementCounter : function() {
            return ++this.counter;
        },
        resetCounter: function() {
            return this.counter = 0;
        }
    };
});