app.controller("AuthCtrl",function($scope,$http){
	
	/*******************Register*****************************************/
	$scope.register=function(name,email,pswrd){
		$scope.success=" ";
		$http.post("api/register.php",{
			'name' : name,
			'email' : email,
			'pswrd' : pswrd
		})
		.then(function(response){
			if(response.data=="0"){
				$scope.success="false";
				$scope.$evalAsync();
			}
			else{
				$scope.success="true";
				$scope.$evalAsync();	
			}
			
		});
	}
	/*******************End  Register************************************/

	/*******************Login*****************************************/
	$scope.login=function(email,pswrd){
		$http.post('api/login.php',{
			'email'  :  email,
			'pswrd'   :  pswrd
		}).then(function(response){
			console.log(response.data);
		})
	}

	/*******************End   Login*************************************/
});