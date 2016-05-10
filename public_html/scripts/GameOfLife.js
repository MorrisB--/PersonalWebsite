alert("Entered");

var cellSize = 6;
var numCells = 100;
var canvas = document.getElementById('gameBackground');
canvas.width = cellSize * numCells;
canvas.height = cellSize * numCells;
var context = canvas.getContext('2d');
var array = buildArray();

function drawCell(x, y, alive) {
	context.beginPath();
	context.fillStyle = alive ? '#000000' : '#f2f2f2';
	context.rect(x * cellSize, y * cellSize, cellSize, cellSize);
	context.fill();
}

function buildArray() {
	var array = [];
	for (var i = 0; i < numCells; i++) {
		var columns = [];
		for (var j = 0; j < numCells; j++)
			columns.push(0);

		array.push(columns);
	}
	return array;
}

function populate(array) {
	for (var x = 0; x < array.length; x++)
		for (var y = 0; y < array[x].length; y++)
			if (Math.log(Math.random() * 10) < -0.6)
				array[x][y] = 1;

}

function display(array) {
	for (var x = 0; x < array.length; x++)
		for (var y = 0; y < array[x].length; y++)
			drawCell(x, y, array[x][y]);

}

function lifeCycle(array) {
	var newArray = buildArray();
	for (var x = 0; x < array.length; x++) {
		for (var y = 0; y < array[x].length; y++) {
			var cell = array[x][y];
			var alive = livingNeighbors(array, x, y);

			if (cell == 1) {
				if (alive < 2)
					newArray[x][y] = 0;
				else if (alive == 2 || alive == 3)
					newArray[x][y] = 1;
				else if (alive > 3)
					newArray[x][y] = 0;

			} else if (cell == 0 && alive == 3)
				newArray[x][y] = 1;

		}
	}
	return newArray;
}

function livingNeighbors(array, x, y) {
	if (x > 0 && y > 0 && x < numCells - 1 && y < numCells - 1) {
		var totalAlive = array[x - 1][y - 1] + array[x][y - 1] + array[x + 1][y - 1]
				+ array[x - 1][y] + array[x + 1][y] + array[x - 1][y + 1]
				+ array[x][y + 1] + array[x + 1][y + 1];
		return totalAlive;
	} else
		return 0;

}

populate(array);
display(array);

setInterval(function() {
	var newArray = lifeCycle(array);
	display(newArray);
	array = newArray;
}, 100);