// Ajax Request in Adding Criteria
let a = $('#add-criteria');
$('#add-criteria').submit(function(e) {
	e.preventDefault();
	let info = $("#add-criteria").serialize();

	// let arr = [];

	// let singleObj1 = {
	// 	_token: $('input[name=_token]').val(),
	// 	description: 'Quiz',
	// 	percentage: '25'
	// };

	// arr.push(singleObj1);

	// let singleObj2 = {
	// 	_token: $('input[name=_token]').val(),
	// 	last_name: 'Obama',
	// 	first_name: 'Trump'
	// };
	let multipleObj = [
			{
				_token: $('input[name="_token"]').val(),
				last_name: 'Trump',
				first_name: 'Donald'
			},
			{
				_token: $('input[name="_token"]').val(),
				last_name: 'Trump',
				first_name: 'Donald'
			}
		];

	let parsed = JSON.stringify(multipleObj);


	// multipleObj.forEach(function(obj){
	// 	$.ajax({
	// 		type: 'post',
	// 		url: '/dashboard/criteria',
	// 		dataType: 'json',
	// 		data: obj,
	// 		success: function(data) {
	// 			console.log(data);
	// 		},
	// 		error: function(xhr, ajaxOptions, thrownError) {
	// 			console.log(thrownError);
	// 		}
	// 	});
	// });

	

	// console.log(info);
	console.log(parsed);
});