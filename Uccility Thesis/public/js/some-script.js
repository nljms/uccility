console.clear();

var select = (element) => document.querySelector(element);
var grades = [];
var temp;

// summarize();
if(select('#student-count'))
{
	compute();
}
getCells();
if(select('#btn-save'))
{
	select('#btn-save').onclick = function() {
		compute();
		save_grades();
	};
}

function remove(array, element)
{
	const index = array.indexOf(element);
	array.splice(index, 1);
}

function compute()
{
	var dataCount = parseFloat(document.querySelector('#student-count').innerText);
	var criterias = Array.from(document.querySelectorAll('.criterias'));
	var types = criterias.map(item => item.getAttribute('type'));
	var percentages = criterias.map(item => item.getAttribute('percentage'));
	var removed = remove(percentages, "10");
	var removed = remove(types, "Attendance");
	var values = [];
	var overall = [];
	var final_computation = 0;
	var items = 0;
	for(var y = 0; y < dataCount; y++)
	{
		final_computation = 0;
		for(var i = 0, len = types.length; i < len; i++ )
		{
			values = [];
			var criteria = document.querySelector(`.${types[i]}`);
			var count = parseFloat(criteria.getAttribute('colspan'));
			items = count;
			for(var x = 0; x < count; x++)
			{
				var elem = document.querySelector(`.${types[i]}${y}${x}`);
				var points = parseFloat(elem.innerText);
				var total = parseFloat(elem.getAttribute('total'));
				var score = ((points / total) * 50) + 50;
				values.push(score);
			}
			var sum = values.reduce((sum, value) => sum + value, 0);
			var divided = sum / count;
			var float_parsed = parseFloat(divided).toFixed(2);
			var represent = {
				[`${types[i]}`] : sum,
				count : count,
				overall : float_parsed,
				percentage : percentages[i]
			};
			overall.push(divided);
			var divided_by_percentage = divided * (percentages[i] / 100);
			final_computation = final_computation + divided_by_percentage;
		}
		var total_sum = overall.reduce((sum, value) => sum + value, 0);
		var last = parseFloat(final_computation + 10).toFixed(2);
		var remarks = calibrate_grade(last);
		var tabs = select('#table-content').rows[y];
		tabs.lastElementChild.innerText = remarks;
	}
}

function summarize()
{
	const dataCount = parseFloat(document.querySelector('#student-count').innerText);
	const items = Array.from(document.querySelectorAll('td[data-activity]'));
	const activities = document.querySelector('[data-activities]').dataset.activities;
	const data = items.map(item => parseFloat(item.innerText));

	var arr = [];

	for(var i = 0;i < dataCount; i++)
	{
		var arr2 = [];
		for(var x = 0;x <= activities; x++)
		{
			var dataItems = parseFloat(document.querySelector(`#data-idselect{i}select{x}`).innerText);
			arr2.push(dataItems);
			// var data = `data[select{i}][select{x}]`;
			// arr2.push(data);
		}
		arr.push(arr2);
	}

	var sum = [];

	// const total = arr.reduce(value => value += value);
	for(var i = 0, len = arr.length;i < len;i++)
	{
		sum.push(arr[i].reduce((sum, value) => sum + value, 0));
	}

	for(var i = 0, len = sum.length;i < len;i++)
	{
		document.querySelector(`#gwaselect{i}`).innerText = sum[i];
	}
}

if(select('#btn-field'))
{
	select('#btn-field').addEventListener("click", function(e){
		e.preventDefault();
		addFields();
	});
}

function addFields()
{
	var num = select('#items').value;
	var container = select('#input-container');
	var desc = select('#criteria').options[select('#criteria').selectedIndex].text;
	while (container.hasChildNodes()) {
		container.removeChild(container.lastChild);
    }
    for(var i = 0;i < num;i++)
    {
    	container.appendChild(document.createTextNode(desc + " " + (i+1) + " "));
    	var input = document.createElement("input");
    	input.setAttribute("type", "text");
    	input.setAttribute("name", "criteria_item[]");
    	input.setAttribute("class", "form-control");
    	input.setAttribute("style", "color: black;");
    	container.appendChild(input);
    	container.appendChild(document.createElement("br"));
    }
	console.log(desc);
}

function getCells()
{
	if(select('#table-content'))
	{
		var count = 0;
		var table = select('#table-content');
		var obj = {
			length: 0,
			addElem: function addElem(elem) {
				[].push.call(this, elem);
			}
		};
		for(var i = 0, row; row = table.rows[i]; i++)
		{
			for(var x = 0, col; col = row.cells[x]; x++)
			{
				table.rows[i].cells[x].onfocus = function() {
					temp = this.innerText;
				};

				table.rows[i].cells[x].onblur = function() {
					var curr = this.innerText;
					if(temp != curr)
					{
						var data = { 
							_token: $('input[name="_token"]').val(),
							user_id: this.getAttribute('user-id'),
							criteria_item_id: this.getAttribute('criteria-item'),
							total: parseFloat(this.innerText)
						};
						grades.push(data);
						compute();
					}
				};

				table.rows[i].cells[x].onkeyup = function(e) {
					var current = this.innerText;
					var total = this.getAttribute('total');
					var parsed_total = parseFloat(total);
					if(current > parsed_total)
					{
						this.style.border = "2px solid red";
					}
					else
					{
						this.style.border = "1px solid #ddd";	
					}
				};
			}
		}
	}
}

if(select('.highlights'))
{
	var rows = document.querySelectorAll('.highlights');
	var table = select('#table-content');
	for(var i = 0, len = rows.length; i < len; i++)
	{
		rows[i].onmousedown = function() {
			var index = this.id;
			for(var x = 1, col = table.rows[index].cells.length; x < col; x++)
			{
				table.rows[index].cells[x].style.borderBottom = '2px solid #5292f7';
				table.rows[index].cells[x].style.borderTop = '2px solid #5292f7';
				table.rows[index].cells[x].style.backgroundColor = '#e6f0ff';
			}
		}
		rows[i].onmouseup = function() {
			var index = this.id;
			for(var x = 1, col = table.rows[index].cells.length; x < col; x++)
			{
				table.rows[index].cells[x].style.borderBottom = '1px solid #ddd';
				table.rows[index].cells[x].style.borderTop = '1px solid #ddd';
				table.rows[index].cells[x].style.backgroundColor = '#fff';
			}
		}
	}
}

function save_grades()
{
	grades.forEach(function(obj) {
		$.ajax({
			type: 'post',
			url: '/dashboard/grading-sheet/save',
			data: obj,
			success: function(data) {
				console.log(data);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				console.log(thrownError);
			}
		});
	});
	alert('Successfully Saved');
}

if(select('#term'))
{
	select('#term').onchange = function() {
		var term = this.options[select('#term').selectedIndex].value;
		window.location = '/dashboard/grading-sheet/' + term;
	};
}

function calibrate_grade(grade)
{
	var point = Math.round(grade);
	if(point >= 99)
	{
		return parseFloat(1.0).toFixed(1);
	}
	else if(point >= 96 && point <= 98)
	{
		return parseFloat(1.25).toFixed(2);
	}
	else if(point >= 93 && point <= 95)
	{
		return parseFloat(1.5).toFixed(1);
	}
	else if(point >= 90 && point <= 92)
	{
		return parseFloat(1.75).toFixed(2);
	}
	else if(point >= 87 && point <= 89)
	{
		return parseFloat(2.0).toFixed(1);
	}
	else if(point >= 84 && point <= 86)
	{
		return parseFloat(2.25).toFixed(2);
	}
	else if(point >= 81 && point <= 83)
	{
		return parseFloat(2.5).toFixed(1);
	}
	else if(point >= 78 && point <= 80)
	{
		return parseFloat(2.75).toFixed(2);
	}
	else if(point >= 75 && point <= 77)
	{
		return parseFloat(3.0).toFixed(1);
	}
	else if(point >= 72 && point <= 74)
	{
		return parseFloat(4.0).toFixed(1);
	}
	else if(point >= 0 && point <= 71)
	{
		return parseFloat(5.0).toFixed(1);
	}
	else
	{
		return parseFloat(5.0).toFixed(1);
	}
}

// hr evaluation summary

if(select('#evaluation-summary')) {
	var eval_table = select('#evaluation-summary').getElementsByTagName('td');
	var values = {};
	var sum = 0;
	var val = 0;
	// for(var x = 1; x <= 5; x++) {
		
		
	// }
	var columns = document.querySelectorAll(`summable5`);
	columns.forEach(function(col) {
		// values[col] = col.innerText;
		console.log(col);
	});
}

if(select('#toggle-options'))
{
	var toggle = select('#toggle-options');
	var options = document.querySelectorAll('.options');
	toggle.onclick = function() {
		options.forEach(function(ele) {
			if(ele.style.display == 'none')
			{
				ele.style.display = 'block';
			}
			else
			{
				ele.style.display = 'none';
			}
		});
	};
}