$(document).ready(function(){
	$("body").addClass("loaded");
});


var $loginForm = $("#loginForm");

// $("div")
// $("#loginForm div")

if($loginForm.length > 0){
	var $loginEmailInput = $loginForm.find("input[name=loginEmail]");

	$loginForm.on("submit", loginFormSubmitHandler);

	function loginFormSubmitHandler(event){
		var allValid = true;
		allValid &= validateNotEmpty($loginEmailInput);
		if(!allValid){
			event.preventDefault();
		}
	}
}

//$registerForm
var $registerForm = $('#registerForm');

if($registerForm.length > 0){
	var $registerMailInput = $registerForm.find("input[name=registerEmail]");
	var $registerPasswordInput = $registerForm.find("input[name=registerPassword]");
	var $registerPassword2Input = $registerForm.find("input[name=registerPassword2]");

	$registerForm.on("submit", registerFormSubmitHandler);

	function registerFormSubmitHandler(event){
		var allValid = true;
		allValid &= validateNotEmpty($registerMailInput);
		allValid &= validateNotEmpty($registerPasswordInput);
		allValid &= validateNotEmpty($registerPassword2Input);
		if(!allValid){
			event.preventDefault();
		}
	}
}

var $AddTodoForm = $('#addTodo form');

if($AddTodoForm.length > 0){
	var $title = $AddTodoForm.find("input[name=title]");

	$AddTodoForm.on("submit", AddTodoFormSubmitHandler);

	$("#todoList a.delete").on("click", deleteTodoHandler);

	function AddTodoFormSubmitHandler(event){
		event.preventDefault();

		var allValid = true;
		allValid &= validateNotEmpty($title);
		if(allValid){
			// ajax call
			$.ajax({
				type:"POST",
				url: $AddTodoForm.attr("action"),
				//setten url: $AddTodoForm.attr("action", ....//waar ge na toe wil//)
				data: $AddTodoForm.serialize()
			}).done(function(result){
				updateTodos(result);
			}).fail(function(xhr, ajaxOptions, thrownError){
				console.log("error");
			});
			// $.post($AddTodoForm.attr("action"), $AddTodoForm.serialize()).done(function(result){
			// }).fail(function(xhr, ajaxOptions, thrownError){
			// 	console.log("error");
			// });
	 	}
	}

	function updateTodos(result){
		var $currentItems = $("#todoList li");
		var $newItems = $(result).find("#todoList li");

		var currentItemsIds = [];
		var newItemsIds = [];

		$currentItems.each(function(index, el){
			currentItemsIds.push($(el).attr("id"));
		});

		$newItems.each(function(index, el){
			newItemsIds.push($(el).attr("id"));
		});

		$("#todoList").replaceWith($(result).find("#todoList"));

		$("#todoList a.delete").on("click", deleteTodoHandler);

		$.each(newItemsIds, function(index, id){
			if($.inArray(id, currentItemsIds) == -1){
				$("#" + id).css("opacity", "0");
				setTimeout(function(){
					$("#" + id).css("opacity", "1");
				}, 100);
			}
		});


	}

	function deleteTodoHandler(e){
		e.preventDefault();
		$.get($(this).attr("href")).done(function(result){
			updateTodos(result);
		}).fail(function(xhr, ajaxOptions, thrownError){
			console.log("error");
		});
	}
}

//$addTodoForm
function validateNotEmpty($element){
	var $errorMessage = $element.parent().find("span");
	if($element.val().length > 0){
		$element.removeClass("has-error");
		$errorMessage.addClass("hidden");
		return true;
	} else {
		$element.addClass("has-error");
		$errorMessage.removeClass("hidden");
		return false;
	}

	console.log($errorMessage);
}
