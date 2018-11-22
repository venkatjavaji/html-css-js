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
						break;
					case 3:
						$scope.showHideMultitripDiv(val,true,false,false);
						break;
					case 4 :
						$scope.showHideMultitripDiv(val,true,true,false);
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
					
					
			 $('.departuredate').datepicker(
            {
                showButtonPanel: true, minDate: 0, maxDate: "+12M",
                beforeShow: function () {
                    $(this).datepicker('option', 'maxDate', $('.departuredate').val());
                }
            });
			$('.departuredate1').datepicker(
            {
                showButtonPanel: true, minDate: 0, maxDate: "+12M",
				beforeShow: function () {
                    $(this).datepicker('option', 'maxDate', $('.departuredate1').val());
					
                }
                
            });
			$('.departuredate2').datepicker(
            {
                showButtonPanel: true, minDate: 0, maxDate: "+12M",
				beforeShow: function () {
                    $(this).datepicker('option', 'maxDate', $('.departuredate1').val());
					if ($('.departuredate1').val() === '')
								$(this).datepicker('option', 'minDate', 0);
                }
                
            });
			$('.departuredate3').datepicker(
            {
                showButtonPanel: true, minDate: 0, maxDate: "+12M",
				beforeShow: function () {
                    $(this).datepicker('option', 'maxDate', $('.departuredate2').val());
					if ($('.departuredate2').val() === '')
								$(this).datepicker('option', 'minDate', 0);
                }
                
            });
			$('.departuredate4').datepicker(
            {
                showButtonPanel: true, minDate: 0, maxDate: "+12M",
				beforeShow: function () {
                    $(this).datepicker('option', 'maxDate', $('.departuredate3').val());
					if ($('.departuredate3').val() === '')
								$(this).datepicker('option', 'minDate', 0);
                }
                
            });
			$('.departuredate5').datepicker(
            {
                showButtonPanel: true, minDate: 0, maxDate: "+12M",
				beforeShow: function () {
                    $(this).datepicker('option', 'maxDate', $('.departuredate4').val());
					if ($('.departuredate4').val() === '')
								$(this).datepicker('option', 'minDate', 0);
                }
                
            });
			$('.returndate').datepicker(
					{
						showButtonPanel: true, defaultDate: "+1w", maxDate: "+12M",
						beforeShow: function () {
							$(this).datepicker('option', 'minDate', $('.departuredate').val());
							if ($('.departuredate').val() === '')
								$(this).datepicker('option', 'minDate', 0);
						}
			});
};