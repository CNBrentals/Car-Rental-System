console.clear();

var myApp = angular.module('myApp', []);

myApp.controller('MedicalProfileCtrl', function($scope,$http){

$http({
  method: 'GET',
  url: '../function/select.php',
  dataType : 'json',
  encode  : true
 }).then(function successCallback(response) {
  $users = response.data;
  console.log($users);
  
  	$scope.dataModel = {
		personalInfo: {
			'name': $users[0].username,
			'firstname': $users[0].firstname,
			'lastname': $users[0].lastname,
			'gender': $users[0].gender,
			'contact_number':$users[0].contact_number,
			'DOB': $users[0].DOB,
			'address': $users[0].address,
			'email': $users[0].email
		}
	};
 });

});

myApp.directive('medicalPersonalInfo', function(){
	return {
		scope: {
			model: "=",
			id: "="
		},
		link: function(scope){
			var labels = {
				uname: "Username",
				phone: "Phone #",
				fname: "Firstname",
				email: "Email",
				lastname: "Surname",
				DOB: "Date Of Birth",
				gender: "Gender",
				address: "address",
			};
			
			// models
			angular.extend(scope, {
				labels: labels,
				viewModel: scope.model,
				editModel: {}
			});
			
			// automatically update viewModel if model change
			scope.$watch('model', function(newVal, oldVal){
				scope.viewModel = scope.model;
			});
			
			// methods
			angular.extend(scope, {
				showEditModalFn: function(viewModel, editModalId){
					scope.editModel = viewModel ? angular.copy(viewModel) : {};
					$(editModalId).modal('toggle');
				},
				saveEditFn: function(editModalId){
					// pass data back
					scope.model = angular.copy(scope.editModel);
					
					// clean UI
					$(editModalId).modal('toggle');
				}
			});
		},
		template: $("#medicalPersonalInfoTemplate").html(),
		replace: true
	};
});

myApp.directive('displayText', function(){
	return {
		scope: {
			label: "=",
			model: "="
		},
		template: $("#displayTextTemplate").html(),
		replace: true
	}
});

myApp.directive('formInput', function(){
	return {
		scope: {
			label: "=",
			model: "=",
			type: "@",
			title: "@",
			name:"@"
		},
		link: function(scope, element, attributes){
			if (scope.name){ element.find("input").attr("name", scope.name); }
			if (scope.type){ element.find("input").attr("type", scope.type); }
			if (scope.readonly){ element.find("input").attr("readonly", scope.readonly); }
			if (scope.title){ element.find("input").attr("title", scope.title); }
		},
		template: $("#formInputTemplate").html(),
		replace: true
	}
});