let items = [
	{
		id: 0,
		name: "Buy One Get One Free",
		description: "This is some text describing the first offer!",
		type: "Discount",
		validFor: 4,
	},
	{
		id: 1,
		name: "50% Sale on all products",
		description: "This is some text describing the second offer!",
		type: "Discount",
		validFor: 10,
	},
	{
		id: 2,
		name: "30% Sale on all products",
		description: "This is some text describing the third offer!",
		type: "Discount",
		validFor: 7,
	},
	{
		id: 3,
		name: "Free gifts",
		description: "This is some text describing the fourth offer!",
		type: "Coupons",
		validFor: 2,
	},
	{
		id: 4,
		name: "Share your experiences",
		description: "This is some text describing the second offer!",
		type: "Referral",
		validFor: 30,
	},
];
function makeVerticalList() {
	document.getElementById("horizontalOfferList").innerHTML = ""; // to reset horizontal if it was previously pressed
	const el = document.getElementById("verticalOfferList");
	el.innerHTML = ""; // to reset the div and avoid adding endlessly
	let listWrap = document.createElement("div");
	listWrap.className += "list-group";
	el.appendChild(listWrap);

	items.forEach(function (item, idx) {
		let a = document.createElement("a");
		a.className += "list-group-item list-group-item-action flex-column align-items-start m-2";
		!idx ? (a.className += " active") : null;
		a.href = "#";
		let textWrap = document.createElement("div");
		textWrap.className += "d-flex w-100 justify-content-between";
		let heading = document.createElement("h3");
		heading.className += " mb-1";
		heading.innerHTML += item.name;

		let p = document.createElement("p");
		p.className += "m-2";
		p.innerHTML += item.description;

		let small1 = document.createElement("small");
		small1.innerHTML += item.validFor + " days left";
		small1.className += "Red";

		let small2 = document.createElement("small");
		small2.innerHTML += "Type: " + item.type;

		textWrap.appendChild(heading);
		textWrap.appendChild(small1);
		a.appendChild(textWrap);
		a.appendChild(p);
		a.appendChild(small2);
		listWrap.appendChild(a);
	});
}
function makeHorizontalList() {
	document.getElementById("verticalOfferList").innerHTML = ""; // to reset vertical if was previously pressed
	const el = document.getElementById("horizontalOfferList");
	el.innerHTML = ""; // to reset the div and avoid adding endlessly
	let row = document.createElement("row");
	row.className += "row mx-auto";
	el.appendChild(row);

	items.forEach(function (item) {
		let card = document.createElement("div");
		card.className += "card col-sm-2 text-center m-2 offerCard";
		let cardBody = document.createElement("div");
		cardBody.className += "card-body";

		let heading = document.createElement("h3");
		heading.className += " mb-1";
		heading.innerHTML += item.name;
		let p = document.createElement("p");
		p.className += "m-2";
		p.innerHTML += item.description;
		let small1 = document.createElement("small");
		small1.innerHTML += item.validFor + " days left";
		small1.className += "Red";
		let small2 = document.createElement("small");
		small2.className += "block m-2";
		small2.innerHTML += "Type: " + item.type;
		row.appendChild(card);
		card.appendChild(cardBody);
		cardBody.appendChild(heading);
		cardBody.appendChild(p);
		cardBody.appendChild(small2);
		cardBody.appendChild(small1);
	});
}
makeHorizontalList();
