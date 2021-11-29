const availableRooms = {};

//filter result functions

// should create a card result contating room detatils and the total cost(price * stay),
// and a button redirecting to reservation form

const resolveCallBack = (message) => {
	console.log(message);
};

const rejectCallBack = (message) => {
	console.log(message);
};

const onProgressCallback = () => {
	console.log("loading please wait...");
};

const fetchRoomAvailability = (onProgressCallback) => {
	return new Promise((resolve, reject) => {
		let form = document.getElementById("search-room-form");
		let formData = new FormData(form);
		let xhr = new XMLHttpRequest();

		xhr.onload = () => {
			resolve(xhr.responseText);
		};

		xhr.onProgress = () => {
			onProgressCallback();
		};

		xhr.onError = () => {
			reject();
		};

		xhr.open("POST", "../server_scripts/search_room.php");
		xhr.send(formData);
	});
};

const handleSearchButtonClick = (event) => {
	event.preventDefault();
	fetchRoomAvailability(onProgressCallback)
		.then(resolveCallBack)
		.catch(rejectCallBack);
};

document
	.getElementById("find-room-button")
	.addEventListener("click", handleSearchButtonClick);
