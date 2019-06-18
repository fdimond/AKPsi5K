angular.module('SignupApp', [])
.directive('olderThan18', function() {
  return {
    require: 'ngModel',
    link: function (scope, elem, attrs, controller) {
      controller.$validators.olderThan18 = function(value) {
        var d = new Date();;
        var eighteen = 567600000000; // 18 years in milliseconds
        return ((d - Date.parse(value)) > eighteen);
      }
    }
  }
})
//directive to ensure "password" and "confirm password" fields match
.directive('compareTo', function () {
  return {
    require: 'ngModel',
    scope: {
      otherModelValue: "=compareTo"
    },
    link: function (scope, elem, attrs, controller) {
      controller.$validators.compareTo = function (modelValue) {
        return modelValue == scope.otherModelValue;
      };

      scope.$watch("otherModelValue", function() {
        controller.$validate();
      });
    }     
  }
})
.controller('SignupController', function ($scope) {
  'use strict';

});