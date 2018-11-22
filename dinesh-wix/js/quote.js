/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
 var app=angular.module("bdf", []);
 
		app.controller("bdfCtrl", function($scope,$http,$window) {
			$scope.quot = {
				
			};
			 $scope.nofpass = "";
			 $scope.totdest = 2;
			 $scope.cabin = "";
			 $scope.successMessagebool = false;
			 $scope.errorMessagebool = false;
			 
				$scope.name= "";
				//$scope.selected = $scope.phonecodes[0];
				$scope.phone= "";
				$scope.email= "";
				//$scope.nofpass= "";
				//$scope.cabin= "";
				$scope.fromcity= "";
				$scope.tocity= "";
				$scope.deptdate= "";
				$scope.retdate= "";
				$scope.comment= "";
				$scope.from1= "";
				$scope.to1= "";
				$scope.departuredate1= "";
				$scope.from2= "";
				$scope.to2= "";
				$scope.departuredate2= "";
				$scope.from3= "";
				$scope.to3= "";
				$scope.departuredate3= "";
				$scope.from4= "";
				$scope.to4= "";
				$scope.departuredate4= "";
				$scope.from5= "";
				$scope.to5= "";
				$scope.departuredate5= "";
			
			$scope.onLoadFun = function(){
				// $scope.phone="+1 - ";
				 $scope.twowayclick();
				 $(function () {
					loadAutocompleteJquery();
					
				});
				//$scope.loadDefaults();
			};
			
			 $scope.onewayId = angular.element(document.querySelector('#oneway' ));
			 $scope.twowayId  = angular.element(document.querySelector('#twoway' ));
			 $scope.multiwayId = angular.element(document.querySelector('#multiway' ));
			 
			
			 
			 $scope.adddestination = function(){
				 
				if($scope.totdest>=2 && $scope.totdest<5){
					$scope.showhidetrip(++$scope.totdest);
					
				}else {
				}
			};
			
			$scope.rmdestination = function(){
					
					if($scope.totdest>2 && $scope.totdest<=5){
						$scope.showhidetrip(--$scope.totdest);
					}else{
						
					}
			};
			
			$scope.showhidetrip = function(val){
			
				switch(val) {
					case 2 :
						$scope.showHideMultitripDiv(val,false,false,false);
						$('.departuredate2').datepicker('setEndDate', '');
						break;
					case 3:
						$scope.showHideMultitripDiv(val,true,false,false);
						$('.departuredate3').datepicker('setEndDate', '');
						break;
					case 4 :
						$scope.showHideMultitripDiv(val,true,true,false);
						$('.departuredate4').datepicker('setEndDate', '');
						break;
					case 5:
						$scope.showHideMultitripDiv(val,true,true,true);
						break;
					default : break;
				
				}
			};
			
			$scope.showHideMultitripDiv = function(val,three,four,five){
						$scope.totdest = val;//re-assigning to avoid multi-cahnges
						$scope.multi3 = three;
						$scope.multi4 = four;
						$scope.multi5 = five;
			};
			
			
			
			$scope.onewayclick = function(){
				$scope.showhidetrip(2);//this is to multipletrip value submission
				$scope.showHideDiv(true,false,true);
				$scope.loadActiveState('active','','');
				$scope.trip = 'oneway';
				$("#returndate").val("");//JQuery
				$('.departuredate').datepicker('setEndDate', '');
			};
			$scope.twowayclick = function(){
				//console.log("called...;;;;");
				 $scope.loadActiveState('','active','');
				 $scope.showHideDiv(true,false,false);
				$scope.showhidetrip(2);//this is to multipletrip value submission
				$scope.trip = 'roundtrip';
			};
			
			$scope.multiwayclick = function(){
				
				$scope.showHideDiv(false,true,false);
				//$scope.showhidetrip(2);//this is to multipletrip value submission
				$scope.loadActiveState('','','active');
				$scope.trip = 'multicity';
				//$("#processing").modal('show');
				
			};
			
			
			
			$scope.loadActiveState = function(oneway,twoway,multiway){
				$scope.oneway = oneway;
				$scope.twoway = twoway;
				$scope.multiway = multiway;
				$(function () {
					/**
						Please TODO why you want to define the function in startup$(fun)
					**/
					loadAutocompleteJquery();
				});
			}
			
			$scope.showHideDiv = function(onewaydiv,multiwaydiv,returndisab){
				$scope.onewaydiv = onewaydiv;
				$scope.multiwaydiv = multiwaydiv;
				$scope.returndaydis = returndisab;   
			}
			
			 $scope.myModalClose = function(){
				$window.location.reload();
			};
			
			$scope.submitForm = function(){
				
				$scope.quot.trip = $scope.trip;
				$scope.quot.name = $scope.name;
				//$scope.quot.selected = $scope.selected;
				$scope.quot.phonenumber =  $scope.phone;
				$scope.quot.email = $scope.email;
				$scope.quot.noofpassengers = $scope.nofpass;
				$scope.quot.cabin = $scope.cabin;
				$scope.quot.fromcity = $("#from").val();//TODO - try to replace with angular
				$scope.quot.tocity = $("#to").val();
				$scope.quot.departuredate = $("#departuredate").val();
				$scope.quot.returndate = $("#returndate").val();
				$scope.quot.comment= $scope.comment;
				
				
				
				if($scope.trip == 'multicity'){
					
					$scope.quot.from1 = $("#from1").val();
					$scope.quot.to1 =$("#to1").val();
					$scope.quot.departuredate1 = $("#depart1").val();
					
					$scope.quot.from2 = $("#from2").val();
					$scope.quot.to2 = $("#to2").val();
					$scope.quot.departuredate2 = $("#depart2").val();
					
					$scope.quot.from3 = $("#from3").val();
					$scope.quot.to3 = $("#to3").val();
					$scope.quot.departuredate3 = $("#depart3").val();
					
					$scope.quot.from4 = $("#from4").val();
					$scope.quot.to4 = $("#to4").val();
					$scope.quot.departuredate4 = $("#depart4").val();
					
					$scope.quot.from5 = $("#from5").val();
					$scope.quot.to5 = $("#to5").val();
					$scope.quot.departuredate5 = $("#depart5").val();
					
				}
				
				console.log($scope.quot);
				$("#processing").modal('show');
				//return;
				 $http({

						url: "email_handler.php",
						data: $scope.quot,
						method: 'POST',
						headers : {'Content-Type':'application/x-www-form-urlencoded; charset=UTF-8'}

					}).then(function(data){

						console.log("OK", data);
						$("#processing").modal('hide');
						// $scope.quotation.$setPristine();
						$scope.successMessage = "We have received your details and  we'll get back to you within 24 hours.";
						$scope.successMessagebool = true;
						 $("#myModal").modal('show');
						

					},function(err){
						
						console.log(err);
						$("#processing").modal('hide');
						$scope.errorMessagebool = true;
						$scope.errorMessage =  "Something went wrong, please try after sometime";
						 $("#myModal").modal('show');
										
					});
				
			};
			
			$scope.loadDefaults = function(){
				
				
			};
			
	$scope.selectphonecode = function(){
		if(!($scope.selected.name == "Select Country")) {
			//$scope.phone=$scope.selected.dial_code + " - ";
		} else {
			$scope.quotation.phone = "";
		}
	}
			
		});

	

loadAutocompleteJquery = function(){
			$(".autocomplete").autocomplete({
						//cityCountryAirportCode value should be fetched from airportList.js file
						source: function (request, response) {
							var results = $.ui.autocomplete.filter(cityCountryAirportCode, request.term);
							response(results.slice(0, 10));
						}

					});
					
			$(".departuredate").datepicker({
				autoclose: true,
				'startDate': new Date(),
				todayHighlight: true,
			}).on('changeDate', function (selected) {
				var minDate = new Date(selected.date.valueOf());
				$('.returndate').datepicker('setStartDate', minDate);
			});
			
			$(".returndate").datepicker({
				'startDate': new Date(),
				autoclose: true,
				todayHighlight: true,
			}).on('changeDate', function (selected) {
					var minDate = new Date(selected.date.valueOf());
					$('.departuredate').datepicker('setEndDate', minDate);
			});
			
			/*
				********multi select******
			*/
			$(".departuredate1").datepicker({
				autoclose: true,
				'startDate': new Date(),
				todayHighlight: true,
			}).on('changeDate', function (selected) {
				var minDate = new Date(selected.date.valueOf());
				$('.departuredate2').datepicker('setStartDate', minDate);
				$('.departuredate3').datepicker('setStartDate', minDate);
				$('.departuredate4').datepicker('setStartDate', minDate);
				$('.departuredate5').datepicker('setStartDate', minDate);
			});
			$(".departuredate2").datepicker({
				autoclose: true,
				
				todayHighlight: true,
			}).on('changeDate', function (selected) {
				var minDate = new Date(selected.date.valueOf());
				$('.departuredate1').datepicker('setEndDate', minDate);
				$('.departuredate3').datepicker('setStartDate', minDate);
				$('.departuredate4').datepicker('setStartDate', minDate);
				$('.departuredate5').datepicker('setStartDate', minDate);
			});
			
			
			$(".departuredate3").datepicker({
				autoclose: true,
				
				todayHighlight: true,
			}).on('changeDate', function (selected) {
				var minDate = new Date(selected.date.valueOf());
				$('.departuredate2').datepicker('setEndDate', minDate);
				$('.departuredate1').datepicker('setEndDate', minDate);
				$('.departuredate4').datepicker('setStartDate', minDate);
				$('.departuredate5').datepicker('setStartDate', minDate);
			});
			
			$(".departuredate4").datepicker({
				autoclose: true,
				
				todayHighlight: true,
			}).on('changeDate', function (selected) {
				var minDate = new Date(selected.date.valueOf());
				$('.departuredate3').datepicker('setEndDate', minDate);
				$('.departuredate2').datepicker('setEndDate', minDate);
				$('.departuredate1').datepicker('setEndDate', minDate);
				$('.departuredate5').datepicker('setStartDate', minDate);
			});
			
			$(".departuredate5").datepicker({
				autoclose: true,
				
				todayHighlight: true,
			}).on('changeDate', function (selected) {
				var minDate = new Date(selected.date.valueOf());
				$('.departuredate4').datepicker('setEndDate', minDate);
				$('.departuredate3').datepicker('setEndDate', minDate);
				$('.departuredate2').datepicker('setEndDate', minDate);
				$('.departuredate1').datepicker('setEndDate', minDate);
			});
			
			
			
};